<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Abonnements</title>
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

<h2>Liste des abonnements</h2>

<a class="btn" href="index.php?page=create-abonnement">
    Ajouter un abonnement
</a>

<table>

<tr>
    <th>ID</th>
    <th>Type</th>
    <th>Date début</th>
    <th>Date fin</th>
    <th>Adhérent</th>
    <th>Actions</th>
</tr>

<?php foreach($abonnements as $abonnement): ?>

<tr>
    <td><?= $abonnement['id_abonnement'] ?></td>
    <td><?= $abonnement['type_abonnement'] ?></td>
    <td><?= $abonnement['date_debut'] ?></td>
    <td><?= $abonnement['date_fin'] ?></td>
    <td><?= $abonnement['id_adherent'] ?></td>

    <td>
        <a class="btn-edit"
           href="index.php?page=edit-abonnement&id=<?= $abonnement['id_abonnement'] ?>">
            Modifier
        </a>

        <a class="btn-delete"
           href="index.php?page=delete-abonnement&id=<?= $abonnement['id_abonnement'] ?>"
           onclick="return confirm('Voulez-vous supprimer cet abonnement ?')">
            Supprimer
        </a>
    </td>
</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>