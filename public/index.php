<?php

require_once '../config/Database.php';

require_once '../app/Controllers/AdherentController.php';
require_once '../app/Controllers/AbonnementController.php';

$page = $_GET['page'] ?? 'dashboard';

switch ($page)
{
    // Dashboard
    default:
        require '../views/dashboard/index.php';
        break;

    // Adhérents
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

    // Abonnements
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
}