<?php

require_once __DIR__ . '/../Services/AbonnementService.php';

class AbonnementController
{
    private AbonnementService $abonnementService;

    public function __construct()
    {
        $this->abonnementService = new AbonnementService();
    }

    public function index()
    {
        $abonnements = $this->abonnementService->getAll();

        require __DIR__ . '/../../views/abonnements/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->abonnementService->create(
                $_POST['type_abonnement'],
                $_POST['date_debut'],
                $_POST['date_fin'],
                (int)$_POST['id_adherent']
            );

            header('Location: index.php?page=abonnements');
            exit;
        }

        require __DIR__ . '/../../views/abonnements/create.php';
    }
}