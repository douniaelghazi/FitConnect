<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un adhérent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Modifier un adhérent</h2>

<form method="POST" action="index.php?page=update-adherent">

    <input
        type="hidden"
        name="id_adherent"
        value="<?= $adherent['id_adherent'] ?>"
    >

    <input
        type="text"
        name="nom"
        value="<?= $adherent['nom'] ?>"
        required
    >

    <input
        type="text"
        name="prenom"
        value="<?= $adherent['prenom'] ?>"
        required
    >

    <input
        type="email"
        name="email"
        value="<?= $adherent['email'] ?>"
        required
    >

    <input
        type="text"
        name="telephone"
        value="<?= $adherent['telephone'] ?>"
        required
    >

    <input
        type="number"
        name="id_salle"
        value="<?= $adherent['id_salle'] ?>"
        required
    >

    <button type="submit">
        Modifier
    </button>

</form>

</body>
</html>