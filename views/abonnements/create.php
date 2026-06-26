<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonnement</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Ajouter un abonnement</h2>

<form method="POST">

    <input type="text" name="type_abonnement" placeholder="Type d'abonnement" required>

    <input type="date" name="date_debut" required>

    <input type="date" name="date_fin" required>

    <input type="number" name="id_adherent" placeholder="ID Adhérent" required>

    <button type="submit">
        Ajouter
    </button>

</form>

</body>
</html>