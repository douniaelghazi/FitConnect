<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier une séance</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h2>Modifier une séance</h2>

<form method="POST" action="index.php?page=update-seance">

    <input
        type="hidden"
        name="id_seance"
        value="<?= $seance['id_seance'] ?>"
    >

    <input
        type="date"
        name="date_seance"
        value="<?= $seance['date_seance'] ?>"
        required
    >

    <input
        type="number"
        name="duree"
        value="<?= $seance['duree'] ?>"
        required
    >

    <input
        type="text"
        name="activite"
        value="<?= $seance['activite'] ?>"
        required
    >

    <input
        type="text"
        name="equipement"
        value="<?= $seance['equipement'] ?>"
    >

    <input
        type="number"
        name="id_adherent"
        value="<?= $seance['id_adherent'] ?>"
        required
    >

    <input
        type="number"
        name="id_salle"
        value="<?= $seance['id_salle'] ?>"
        required
    >

    <button type="submit">
        Modifier
    </button>

</form>

<br>

<a class="btn" href="index.php?page=seances">
    Retour
</a>

</div>

</body>
</html>