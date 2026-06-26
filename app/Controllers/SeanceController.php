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
}