<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Séances</title>
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

<h2>Liste des séances</h2>

<a class="btn" href="index.php?page=create-seance">
    Ajouter une séance
</a>

<table>

<tr>
    <th>ID</th>
    <th>Date</th>
    <th>Durée (min)</th>
    <th>Activité</th>
    <th>Équipement</th>
    <th>Adhérent</th>
    <th>Salle</th>
    <th>Actions</th>
</tr>

<?php foreach($seances as $seance): ?>

<tr>

    <td><?= $seance['id_seance'] ?></td>
    <td><?= $seance['date_seance'] ?></td>
    <td><?= $seance['duree'] ?></td>
    <td><?= $seance['activite'] ?></td>
    <td><?= $seance['equipement'] ?></td>
    <td><?= $seance['id_adherent'] ?></td>
    <td><?= $seance['id_salle'] ?></td>

    <td>

        <a class="btn-edit"
           href="index.php?page=edit-seance&id=<?= $seance['id_seance'] ?>">
            Modifier
        </a>

        <a class="btn-delete"
           href="index.php?page=delete-seance&id=<?= $seance['id_seance'] ?>"
           onclick="return confirm('Voulez-vous supprimer cette séance ?')">
            Supprimer
        </a>

    </td>

</tr>

<?php endforeach; ?>

</table>

</div>

</body>
</html>