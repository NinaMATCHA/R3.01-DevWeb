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
            <form action="index.php?action=update_password" method="post">
                <input type="hidden" name="login" value="<?=$_GET['login']?>">

                <label for="password">Votre adresse email :</label>
                <input type="password" name="n_mdp" placeholder="Nouveau Mot de passe" class="input" required />
                <label for="confirm">Votre adresse email :</label>
                <input type="password" name="confirm" placeholder="Confirmation" class="input" required />
                <div>
                    <button type="submit" name="action" value="valider" class="btn">Envoyer</button>
                    <button type="reset" class="btn">Réinitialiser</button>
                </div>
            </form>
        </div>
</main>

<?php
        end_page();
    }
}
?>
