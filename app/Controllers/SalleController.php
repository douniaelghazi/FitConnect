<?php

require_once __DIR__ . '/../Services/SalleService.php';

class SalleController
{
    private SalleService $salleService;

    public function __construct()
    {
        $this->salleService = new SalleService();
    }

    public function index()
    {
        $salles = $this->salleService->getAll();

        require __DIR__ . '/../../views/salles/index.php';
    }
}