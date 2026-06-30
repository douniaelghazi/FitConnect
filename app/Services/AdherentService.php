<?php

require_once __DIR__ . '/../Repositories/AdherentRepository.php';

class AdherentService
{
    private AdherentRepository $adherentRepository;

    public function __construct()
    {
        $this->adherentRepository = new AdherentRepository();
    }

    public function getAll(): array
    {
        return $this->adherentRepository->findAll();
    }

    public function getById(int $id): array|false
    {
        return $this->adherentRepository->findById($id);
    }

    public function create(
        string $nom,
        string $prenom,
        string $email,
        string $telephone,
        int $id_salle
    ): bool {
        return $this->adherentRepository->create(
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        );
    }

    public function update(
        int $id,
        string $nom,
        string $prenom,
        string $email,
        string $telephone,
        int $id_salle
    ): bool {
        return $this->adherentRepository->update(
            $id,
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        );
    }

    public function delete(int $id): bool
    {
        return $this->adherentRepository->delete($id);
    }

    public function hasAbonnement(int $id): bool
    {
        return $this->adherentRepository->hasAbonnement($id);
    }

    public function hasSeance(int $id): bool
    {
        return $this->adherentRepository->hasSeance($id);
    }
}