<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un abonnement</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Modifier un abonnement</h2>

<form method="POST" action="index.php?page=update-abonnement">

    <input
        type="hidden"
        name="id_abonnement"
        value="<?= $abonnement['id_abonnement'] ?>"
    >

    <input
        type="text"
        name="type_abonnement"
        value="<?= $abonnement['type_abonnement'] ?>"
        required
    >

    <input
        type="date"
        name="date_debut"
        value="<?= $abonnement['date_debut'] ?>"
        required
    >

    <input
        type="date"
        name="date_fin"
        value="<?= $abonnement['date_fin'] ?>"
        required
    >

    <input
        type="number"
        name="id_adherent"
        value="<?= $abonnement['id_adherent'] ?>"
        required
    >

    <button type="submit">
        Modifier
    </button>

</form>

</body>
</html>