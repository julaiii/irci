<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;

class RateLimiterService
{
    private $requestStack;
    private $sessionKey = 'rate_limiter';

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * Vérifie si l'utilisateur peut soumettre le formulaire
     * 
     * @param string $action Action à limiter (ex: 'contact_form')
     * @param int $maxAttempts Nombre maximum de tentatives
     * @param int $timeWindow Fenêtre de temps en secondes (par défaut: 1 heure)
     * @return bool
     */
    public function canAttempt(string $action, int $maxAttempts = 3, int $timeWindow = 3600): bool
    {
        $session = $this->requestStack->getSession();
        $now = time();
        
        // Récupérer l'historique des tentatives
        $attempts = $session->get($this->sessionKey, []);
        
        // Nettoyer les anciennes tentatives hors de la fenêtre de temps
        if (isset($attempts[$action])) {
            $attempts[$action] = array_filter($attempts[$action], function($timestamp) use ($now, $timeWindow) {
                return ($now - $timestamp) < $timeWindow;
            });
        }
        
        // Vérifier si l'utilisateur peut tenter
        if (!isset($attempts[$action]) || count($attempts[$action]) < $maxAttempts) {
            return true;
        }
        
        return false;
    }

    /**
     * Enregistre une tentative
     */
    public function recordAttempt(string $action): void
    {
        $session = $this->requestStack->getSession();
        $attempts = $session->get($this->sessionKey, []);
        
        if (!isset($attempts[$action])) {
            $attempts[$action] = [];
        }
        
        $attempts[$action][] = time();
        $session->set($this->sessionKey, $attempts);
    }

    /**
     * Retourne le temps restant avant de pouvoir réessayer (en secondes)
     */
    public function getRetryAfter(string $action, int $timeWindow = 3600): int
    {
        $session = $this->requestStack->getSession();
        $attempts = $session->get($this->sessionKey, []);
        
        if (!isset($attempts[$action]) || empty($attempts[$action])) {
            return 0;
        }
        
        $oldestAttempt = min($attempts[$action]);
        $retryAfter = $timeWindow - (time() - $oldestAttempt);
        
        return max(0, $retryAfter);
    }

    /**
     * Réinitialise les tentatives pour une action
     */
    public function reset(string $action): void
    {
        $session = $this->requestStack->getSession();
        $attempts = $session->get($this->sessionKey, []);
        
        if (isset($attempts[$action])) {
            unset($attempts[$action]);
            $session->set($this->sessionKey, $attempts);
        }
    }
}
