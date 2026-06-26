<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des adhérents</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="?page=create-adherent">Ajouter un adhérent</a>
<h2>Liste des adhérents</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
    </tr>

    <?php foreach($adherents as $adherent): ?>

    <tr>
        <td><?= $adherent['id_adherent'] ?></td>
        <td><?= $adherent['nom'] ?></td>
        <td><?= $adherent['prenom'] ?></td>
        <td><?= $adherent['email'] ?></td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>