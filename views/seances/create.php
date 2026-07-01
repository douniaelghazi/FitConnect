<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Ajouter une séance</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav>
    <h2>FitConnect</h2>

    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="index.php?page=adherents">Adhérents</a></li>
        <li><a href="index.php?page=abonnements">Abonnements</a></li>
        <li><a href="index.php?page=seances">Séances</a></li>
    </ul>
</nav>

<div class="container">

<h2>Ajouter une séance</h2>

<form method="POST">

    <input
        type="date"
        name="date_seance"
        required
    >

    <input
        type="number"
        name="duree"
        placeholder="Durée (minutes)"
        required
    >

    <input
        type="text"
        name="activite"
        placeholder="Activité"
        required
    >

    <input
        type="text"
        name="equipement"
        placeholder="Équipement"
    >

    <input
        type="number"
        name="id_adherent"
        placeholder="ID Adhérent"
        required
    >

    <input
        type="number"
        name="id_salle"
        placeholder="ID Salle"
        required
    >

    <button type="submit">
        Ajouter
    </button>

</form>

</div>

</body>
</html>