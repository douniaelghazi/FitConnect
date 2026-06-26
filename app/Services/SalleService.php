<?php

require_once __DIR__ . '/../Repositories/SalleRepository.php';

class SalleService
{
    private SalleRepository $salleRepository;

    public function __construct()
    {
        $this->salleRepository = new SalleRepository();
    }

    public function getAll(): array
    {
        return $this->salleRepository->findAll();
    }

    public function getById(int $id): array|false
    {
        return $this->salleRepository->findById($id);
    }

    public function create(
        string $nom_salle,
        string $adresse
    ): bool {
        return $this->salleRepository->create(
            $nom_salle,
            $adresse
        );
    }

    public function update(
        int $id,
        string $nom_salle,
        string $adresse
    ): bool {
        return $this->salleRepository->update(
            $id,
            $nom_salle,
            $adresse
        );
    }

    public function delete(int $id): bool
    {
        return $this->salleRepository->delete($id);
    }
}