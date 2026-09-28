<?php

namespace modules\views;

class forgot_password_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Mot de passe oublié");
?>

        <h1>Réinitialisation du mot de passe</h1>

        <?php if (isset($messageError)): ?>
            <p style="color: red;">
                <?= htmlspecialchars($messageError) ?>
            </p>
        <?php endif; ?>

        <?php if (isset($messageSuccess)): ?>
            <p style="color: green;">
                <?= htmlspecialchars($messageSuccess) ?>
            </p>
        <?php endif; ?>

        <!-- Form -->
        <div class="formulaire">
            <form action="index.php?action=update_password" method="post" class="contact-formulaire">
                <input type="hidden" name="login" value="<?=$_GET['login']?>">

                <input type="password" name="n_pwrd" placeholder="Nouveau Mot de passe" class="contact-input" required />

                <input type="password" name="confirm_pwrd" placeholder="Confirmation du Nouveau Mot de passe" class="contact-input" required />
                
                <div class="zone-bouton">
                    <button type="submit" name="action" value="valider" class="bouton-formulaire">Envoyer</button>
                    <button type="reset" class="bouton-formulaire">Réinitialiser</button>
                </div>
            </form>
        </div>

<?php
        end_page();
    }
}
?>
