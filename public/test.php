<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {

    case 'adherents':
        require_once '../app/Controllers/AdherentController.php';
        (new AdherentController())->index();
        break;

    case 'abonnements':
        require_once '../app/Controllers/AbonnementController.php';
        (new AbonnementController())->index();
        break;

    default:
        require '../views/dashboard/index.php';
}