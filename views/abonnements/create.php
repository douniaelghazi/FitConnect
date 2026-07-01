<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter un abonnement</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav>
    <h2>FitConnect</h2>

    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="index.php?page=adherents">Adhérents</a></li>
        <li><a href="index.php?page=abonnements">Abonnements</a></li>
    </ul>
</nav>

<div class="container">

<h2>Ajouter un abonnement</h2>

<form method="POST">

<input type="text" name="type_abonnement" placeholder="Type d'abonnement" required>

<input type="date" name="date_debut" required>

<input type="date" name="date_fin" required>

<input type="number" name="id_adherent" placeholder="ID Adhérent" required>

<button type="submit">Ajouter</button>

</form>

</div>

</body>
</html>