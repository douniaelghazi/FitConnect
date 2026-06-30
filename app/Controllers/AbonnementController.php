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

    public function edit()
    {
        $id = (int)$_GET['id'];

        $abonnement = $this->abonnementService->getById($id);

        require __DIR__ . '/../../views/abonnements/edit.php';
    }

    public function update()
    {
        $this->abonnementService->update(
            (int)$_POST['id_abonnement'],
            $_POST['type_abonnement'],
            $_POST['date_debut'],
            $_POST['date_fin'],
            (int)$_POST['id_adherent']
        );

        header('Location: index.php?page=abonnements');
        exit;
    }

    public function delete()
    {
        $id = (int)$_GET['id'];

        $this->abonnementService->delete($id);

        header('Location: index.php?page=abonnements');
        exit;
    }
}