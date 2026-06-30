<?php

require_once __DIR__ . '/../Services/AdherentService.php';

class AdherentController
{
    private AdherentService $adherentService;

    public function __construct()
    {
        $this->adherentService = new AdherentService();
    }

    public function index()
    {
        $adherents = $this->adherentService->getAll();

        require __DIR__ . '/../../views/adherents/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->adherentService->create(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['telephone'],
                (int)$_POST['id_salle']
            );

            header('Location: index.php?page=adherents');
            exit;
        }

        require __DIR__ . '/../../views/adherents/create.php';
    }

    public function edit()
    {
        $id = (int)$_GET['id'];

        $adherent = $this->adherentService->getById($id);

        require __DIR__ . '/../../views/adherents/edit.php';
    }

    public function update()
    {
        $this->adherentService->update(
            (int)$_POST['id_adherent'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['telephone'],
            (int)$_POST['id_salle']
        );

        header('Location: index.php?page=adherents');
        exit;
    }

    public function delete()
    {
        $id = (int)$_GET['id'];

        if (
            $this->adherentService->hasAbonnement($id) ||
            $this->adherentService->hasSeance($id)
        ) {
            die("Impossible de supprimer cet adhérent. Il possède un abonnement ou des séances.");
        }

        $this->adherentService->delete($id);

        header('Location: index.php?page=adherents');
        exit;
    }
}