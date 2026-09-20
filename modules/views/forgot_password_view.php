<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>

    <meta name="description" content="Réinitialisez votre mot de passe en cas d'oubli en recevant un lien sécurisé sur votre adresse email.">
</head>
<body>

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
<form action="/mot-de-passe-oublie" method="POST">
    <div>
        <label for="email">Votre adresse email :</label>
        <input type="email" id="email" name="email" required placeholder="exemple@domaine.fr">
    </div>

    <button type="submit">Envoyer le lien</button>
</form>

</body>
</html>