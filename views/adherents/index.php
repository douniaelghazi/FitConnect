<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Adhérents</title>
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

<h2>Liste des adhérents</h2>

<a class="btn" href="index.php?page=create-adherent">
    Ajouter un adhérent
</a>

<table>

<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Email</th>
    <th>Actions</th>
</tr>

<?php foreach($adherents as $adherent): ?>

<tr>
    <td><?= $adherent['id_adherent'] ?></td>
    <td><?= $adherent['nom'] ?></td>
    <td><?= $adherent['prenom'] ?></td>
    <td><?= $adherent['email'] ?></td>

    <td>
        <a class="btn-edit"
           href="index.php?page=edit-adherent&id=<?= $adherent['id_adherent'] ?>">
            Modifier
        </a>

        <a class="btn-delete"
           href="index.php?page=delete-adherent&id=<?= $adherent['id_adherent'] ?>"
           onclick="return confirm('Voulez-vous supprimer cet adhérent ?')">
            Supprimer
        </a>
    </td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>