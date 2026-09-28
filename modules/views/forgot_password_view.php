<?php

namespace modules\views;

class forgot_password_view {
    public function show($token = null, $messageError = null): void {
        require '_assets/utils/utils.inc.php';
        start_page("Mot de passe oublié");
?>

        <div class="zone-inscription-connexion">
            <h1>Récupération du mot de passe</h1>
        </div>

        <div class="zone-text">
            <div class="bloc-text i1">
                <p>
                    <?php if ($token): ?>
                        Veuillez saisir votre nouveau mot de passe pour réinitialiser votre compte.
                    <?php else: ?>
                        Saisissez votre adresse email. Si elle est associée à un compte, un lien de réinitialisation vous sera envoyé par mail.
                    <?php endif; ?>
                </p>
            </div>
        </div>

        <!-- Affichage messages -->
        <?php if ($messageError): ?>
            <p style="color: red;">
                <?= htmlspecialchars($messageError) ?>
            </p>
        <?php endif; ?>

        <?php if (isset($_GET['mail']) && $_GET['mail'] === 'sent'): ?>
            <p style="color: green;">
                Un e-mail de réinitialisation vous a été envoyé si votre adresse existe dans notre base.
            </p>
        <?php endif; ?>

        <div class="formulaire">
            <?php if ($token): ?>
                <!-- Nv mdp -->
                <form action="index.php?action=mdpOublie" method="post" class="contact-formulaire">
                    <input type="hidden" name="action_type" value="reset_password" />
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>" /> <!-- sécurité contre injections-->

                    <input type="password" name="password" placeholder="Nouveau mot de passe" class="contact-input" required />

                    <div class="zone-bouton">
                        <button type="submit" class="bouton-formulaire">Valider</button>
                    </div>
                </form>

            <?php else: ?>

                <!-- Demande mail -->
                <form action="index.php?action=mdpOublie" method="post" class="contact-formulaire">
                    <input type="hidden" name="action_type" value="request_reset" />

                    <input type="email" name="email" placeholder="Adresse email" class="contact-input" required />

                    <div class="zone-bouton">
                        <button type="submit" class="bouton-formulaire">Envoyer le lien</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>

<?php
        end_page();
    }
}
?>