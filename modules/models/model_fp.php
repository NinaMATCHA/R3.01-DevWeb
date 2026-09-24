<?php
namespace Blog\Model\Post; // PSR-12: head blocks must be separated by a single blank line
class PostRepository { // PSR-12: opening brace next line
    public function __construct(private \Includes\Database\DatabaseConnection $connection) {}

    public function sendMail(): bool
    {
    $code = (string) random_int(100000, 999999);
    $to      = $mail_adress;
    $subject = 'Code de récupération de mot de passe';
    $message = "Bonjour, voici votre code de récupération de mot de passe" . $code;

    // En-têtes obligatoires / recommandés
    $headers = [
        'From' => 'expediteur@ton-domaine.com',
        'Reply-To' => 'expediteur@ton-domaine.com',
        'Content-Type' => 'text/plain; charset=utf-8',
        'X-Mailer' => 'PHP/' . phpversion()
    ];

    // Envoi
    return mail($to, $subject, $message, $headers);
}
}