<?php

require_once '../config/Database.php';

require_once '../app/Controllers/AdherentController.php';
require_once '../app/Controllers/AbonnementController.php';

$page = $_GET['page'] ?? 'dashboard';

switch($page)
{
    case 'adherents':
        (new AdherentController())->index();
        break;

    case 'abonnements':
        (new AbonnementController())->index();
        break;

    case 'create-adherent':
        (new AdherentController())->create();
        break;

    case 'create-abonnement':
        (new AbonnementController())->create();
        break;

    default:
        require '../views/dashboard/index.php';
}