<?php

require_once '../config/Database.php';

require_once '../app/Controllers/AdherentController.php';
require_once '../app/Controllers/AbonnementController.php';
require_once '../app/Controllers/SeanceController.php';

$page = $_GET['page'] ?? 'dashboard';

switch ($page)
{
    /* ===========================
       Dashboard
    ============================ */

    case 'dashboard':
        require '../views/dashboard/index.php';
        break;

    /* ===========================
       Adhérents
    ============================ */

    case 'adherents':
        (new AdherentController())->index();
        break;

    case 'create-adherent':
        (new AdherentController())->create();
        break;

    case 'edit-adherent':
        (new AdherentController())->edit();
        break;

    case 'update-adherent':
        (new AdherentController())->update();
        break;

    case 'delete-adherent':
        (new AdherentController())->delete();
        break;

    /* ===========================
       Abonnements
    ============================ */

    case 'abonnements':
        (new AbonnementController())->index();
        break;

    case 'create-abonnement':
        (new AbonnementController())->create();
        break;

    case 'edit-abonnement':
        (new AbonnementController())->edit();
        break;

    case 'update-abonnement':
        (new AbonnementController())->update();
        break;

    case 'delete-abonnement':
        (new AbonnementController())->delete();
        break;

    /* ===========================
       Séances
    ============================ */

    case 'seances':
        (new SeanceController())->index();
        break;

    case 'create-seance':
        (new SeanceController())->create();
        break;

    case 'edit-seance':
        (new SeanceController())->edit();
        break;

    case 'update-seance':
        (new SeanceController())->update();
        break;

    case 'delete-seance':
        (new SeanceController())->delete();
        break;

    /* ===========================
       Default
    ============================ */

    default:
        require '../views/dashboard/index.php';
        break;
}