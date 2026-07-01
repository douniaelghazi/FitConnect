<?php

require_once __DIR__ . '/../Services/SeanceService.php';

class SeanceController
{
    private SeanceService $seanceService;

    public function __construct()
    {
        $this->seanceService = new SeanceService();
    }

    public function index()
    {
        $seances = $this->seanceService->getAll();

        require __DIR__ . '/../../views/seances/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $this->seanceService->create(

                $_POST['date_seance'],
                $_POST['duree'],
                $_POST['activite'],
                $_POST['equipement'],
                $_POST['id_adherent'],
                $_POST['id_salle']

            );

            header("Location: index.php?page=seances");
            exit;
        }

        require __DIR__ . '/../../views/seances/create.php';
    }

    public function edit()
    {
        $seance = $this->seanceService->getById($_GET['id']);

        require __DIR__ . '/../../views/seances/edit.php';
    }

    public function update()
    {
        $this->seanceService->update(

            $_POST['id_seance'],
            $_POST['date_seance'],
            $_POST['duree'],
            $_POST['activite'],
            $_POST['equipement'],
            $_POST['id_adherent'],
            $_POST['id_salle']

        );

        header("Location: index.php?page=seances");
        exit;
    }

    public function delete()
    {
        if(isset($_GET['id']))
        {
            $this->seanceService->delete($_GET['id']);
        }

        header("Location: index.php?page=seances");
        exit;
    }
}