<?php

require_once __DIR__ . '/../Repositories/AbonnementRepository.php';

class AbonnementService
{
    private AbonnementRepository $abonnementRepository;

    public function __construct()
    {
        $this->abonnementRepository = new AbonnementRepository();
    }

    public function getAll(): array
    {
        return $this->abonnementRepository->findAll();
    }

    public function getById(int $id): array|false
    {
        return $this->abonnementRepository->findById($id);
    }

    public function create(
        string $type_abonnement,
        string $date_debut,
        string $date_fin,
        int $id_adherent
    ): bool {

        if ($date_fin <= $date_debut) {
            throw new Exception(
                "La date de fin doit être supérieure à la date de début."
            );
        }

        return $this->abonnementRepository->create(
            $type_abonnement,
            $date_debut,
            $date_fin,
            $id_adherent
        );
    }

    public function delete(int $id): bool
    {
        return $this->abonnementRepository->delete($id);
    }
}