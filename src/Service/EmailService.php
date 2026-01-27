<?php

namespace App\Service;

use App\Entity\Contact;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailService
{
    private $mailer;
    private $twig;

    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * Envoie un email de notification lors d'une nouvelle demande de contact
     */
    public function sendContactNotification(Contact $contact): void
    {
        $email = (new Email())
            ->from('noreply@irci-salon.fr')
            ->to('devis@irci-salon.fr') // Email de l'administrateur
            ->subject('Nouvelle demande : ' . $this->getTypeLabel($contact->getTypeContact()))
            ->html($this->twig->render('emails/contact_notification.html.twig', [
                'contact' => $contact,
            ]));

        $this->mailer->send($email);
    }

    /**
     * Envoie un email de confirmation au client
     */
    public function sendContactConfirmation(Contact $contact): void
    {
        $email = (new Email())
            ->from('noreply@irci-salon.fr')
            ->to($contact->getEmail())
            ->subject('IRCI - Confirmation de votre demande')
            ->html($this->twig->render('emails/contact_confirmation.html.twig', [
                'contact' => $contact,
            ]));

        $this->mailer->send($email);
    }

    /**
     * Retourne le label du type de contact
     */
    private function getTypeLabel(string $type): string
    {
        $labels = [
            'prestation' => 'Demande de prestation',
            'devis' => 'Demande de devis',
            'message' => 'Message général',
        ];

        return $labels[$type] ?? $type;
    }
}
