<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Dashboard FitConnect</title>
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

    <h1>Bienvenue sur FitConnect</h1>

    <p>
        Gérez facilement les adhérents, les abonnements et les séances
        de votre salle de sport.
    </p>

    <div class="cards">

        <div class="card">
            <h3>👤 Adhérents</h3>
            <p>Gestion des adhérents inscrits.</p>

            <a class="btn" href="index.php?page=adherents">
                Accéder
            </a>
        </div>

        <div class="card">
            <h3>💳 Abonnements</h3>
            <p>Gestion des abonnements.</p>

            <a class="btn" href="index.php?page=abonnements">
                Accéder
            </a>
        </div>

        <div class="card">
            <h3>🏋️ Séances</h3>
            <p>Gestion des séances de sport.</p>

            <a class="btn" href="index.php?page=seances">
                Accéder
            </a>
        </div>

    </div>

</div>

</body>
</html>