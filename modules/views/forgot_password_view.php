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
            <form action="index.php?action=forgot_password" method="POST" class="contact-formulaire">
                <div>
                    <label for="email">Votre adresse email :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@domaine.fr" class="contact-input" require>
                </div>

                <button type="submit">Envoyer le lien</button>
            </form>
        </div>

<?php
        end_page();
    }
}
?>