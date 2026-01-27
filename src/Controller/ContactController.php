<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\EmailService;
use App\Service\RateLimiterService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(
        Request $request, 
        EntityManagerInterface $em, 
        EmailService $emailService,
        RateLimiterService $rateLimiter,
        LoggerInterface $logger
    ): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Protection Honeypot anti-bot
            if ($request->request->get('website')) {
                $this->addFlash('danger', 'Soumission invalide détectée.');
                return $this->redirectToRoute('contact');
            }
            
            // Vérification du rate limiting (max 3 soumissions par heure)
            if (!$rateLimiter->canAttempt('contact_form', 3, 3600)) {
                $retryAfter = $rateLimiter->getRetryAfter('contact_form', 3600);
                $minutes = ceil($retryAfter / 60);
                
                $this->addFlash('danger', sprintf(
                    'Vous avez atteint la limite de soumissions. Veuillez réessayer dans %d minute(s).',
                    $minutes
                ));
                
                return $this->redirectToRoute('contact');
            }
            
            // Enregistrer la tentative
            $rateLimiter->recordAttempt('contact_form');
            
            // Enregistrement en base de données
            $em->persist($contact);
            $em->flush();
            
            // Envoi des emails
            try {
                // Email de notification à l'administrateur
                $emailService->sendContactNotification($contact);
                
                // Email de confirmation au client
                $emailService->sendContactConfirmation($contact);
                
                $this->addFlash('success', 'Votre message a été envoyé avec succès ! Vous recevrez une confirmation par email.');
            } catch (\Exception $e) {
                $logger->error('Erreur lors de l\'envoi des emails : ' . $e->getMessage());
                $this->addFlash('warning', 'Votre message a été enregistré mais l\'envoi de l\'email de confirmation a échoué.');
            }
            
            return $this->redirectToRoute('contact');
        }
        
        return $this->render('contact/index.html.twig', [
            'page_title' => 'Contact',
            'form' => $form->createView(),
        ]);
    }
}
