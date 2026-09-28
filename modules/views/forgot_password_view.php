<?php

namespace modules\views;

class forgot_password_view {
    public function show(): void {
        require '_assets/utils/utils.inc.php';
        start_page("Mot de passe oublié");
?>

<main>
    
        <header><h1>Réinitialisation du mot de passe</h1></header>

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
        <div class="form-area">
            <form action="index.php?action=forgot_password" method="POST">
                <div>
                    <label for="email">Votre adresse email :</label>
                    <input type="email" id="email" name="email" placeholder="exemple@domaine.fr" class="input" required>
                </div>

                <button type="submit" class="btn">Envoyer le lien</button>
            </form>
        </div>
        
</main>

<?php
        end_page();
    }
}
?>
