<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un adhérent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Ajouter un adhérent</h2>

<form method="POST">

    <input type="text" name="nom" placeholder="Nom" required>

    <input type="text" name="prenom" placeholder="Prénom" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="text" name="telephone" placeholder="Téléphone" required>

    <input type="number" name="id_salle" placeholder="ID Salle" required>

    <button type="submit">
        Ajouter
    </button>

</form>

</body>
</html>