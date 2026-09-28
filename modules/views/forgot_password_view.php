<?php

namespace modules\views;

class forgot_password_view {
    public function show($token = null, $messageError = null): void {
        require '_assets/utils/utils.inc.php';
        start_page("Mot de passe oublié");
?>

        <main>
            <header>
                <h1>Récupération du mot de passe</h1>
            </header>

            <div class="card">
                <p>
                    <?php if ($token): ?>
                        Veuillez saisir votre nouveau mot de passe pour réinitialiser votre compte.
                    <?php else: ?>
                        Saisissez votre adresse email. Si elle est associée à un compte, un lien de réinitialisation vous sera envoyé par mail.
                    <?php endif; ?>
                </p>
            </div>

            <!-- Messages d'erreur / succes -->
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

            <div class="form-area">
                <?php if ($token): ?>
                    <!--Formulaire: Nouveau mdp-->
                    <form action="index.php?action=mdpOublie" method="post">
                        <input type="hidden" name="action_type" value="reset_password" />
                        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>" /> <!--Sécurité contre injections-->

                        <input type="password" name="password" placeholder="Nouveau mot de passe" class="input" required />

                        <button type="submit" class="btn">Valider</button>
                    </form>

                <?php else: ?>

                    <!--Formulaire: Demande email-->
                    <form action="index.php?action=mdpOublie" method="post">
                        <input type="hidden" name="action_type" value="request_reset" />

                        <input type="email" name="email" placeholder="Adresse email" class="input" required />

                        <button type="submit" class="btn">Envoyer le lien</button>
                    </form>
                <?php endif; ?>
            </div>
        </main>

<?php
        end_page();
    }
}
?>