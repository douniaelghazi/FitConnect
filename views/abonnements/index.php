<!DOCTYPE html>
<html>
<head>
    <title>Abonnements</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<a href="?page=create-abonnement">Ajouter un abonnement</a>

<h2>Liste des abonnements</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Date début</th>
        <th>Date fin</th>
        <th>ID Adhérent</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($abonnements as $abonnement): ?>

    <tr>
        <td><?= $abonnement['id_abonnement'] ?></td>
        <td><?= $abonnement['type_abonnement'] ?></td>
        <td><?= $abonnement['date_debut'] ?></td>
        <td><?= $abonnement['date_fin'] ?></td>
        <td><?= $abonnement['id_adherent'] ?></td>

        <td>
            <a href="?page=edit-abonnement&id=<?= $abonnement['id_abonnement'] ?>">
                Modifier
            </a>

            <a href="?page=delete-abonnement&id=<?= $abonnement['id_abonnement'] ?>"
               onclick="return confirm('Supprimer cet abonnement ?')">
                Supprimer
            </a>
        </td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>