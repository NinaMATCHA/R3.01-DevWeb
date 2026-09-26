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
            <form action="index.php?action=forgot_password" method="POST" class="code-formulaire">
                <div>
                    <label for="Code">Insérez le code envoyé à votre adresse email :</label>
                    <input type="text" id="code" name="code" class="code-input" required>
                </div>

                <button type="submit">Valider</button>
            </form>
        </div>

<?php
        end_page();
    }
}
?>
