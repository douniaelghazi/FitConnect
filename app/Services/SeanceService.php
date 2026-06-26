<?php

require_once __DIR__ . '/../Repositories/SeanceRepository.php';
require_once __DIR__ . '/../Repositories/AbonnementRepository.php';

class SeanceService
{
    private SeanceRepository $seanceRepository;
    private AbonnementRepository $abonnementRepository;

    public function __construct()
    {
        $this->seanceRepository = new SeanceRepository();
        $this->abonnementRepository = new AbonnementRepository();
    }

    public function getAll(): array
    {
        return $this->seanceRepository->findAll();
    }

    public function create(
        string $date_seance,
        int $duree,
        string $activite,
        ?string $equipement,
        int $id_adherent,
        int $id_salle
    ): bool {

        $abonnements = $this->abonnementRepository->findAll();

        $valide = false;

        foreach ($abonnements as $abonnement) {

            if (
                $abonnement['id_adherent'] == $id_adherent &&
                $abonnement['date_fin'] >= date('Y-m-d')
            ) {
                $valide = true;
                break;
            }
        }

        if (!$valide) {
            throw new Exception(
                "L'adhérent ne possède pas d'abonnement valide."
            );
        }

        return $this->seanceRepository->create(
            $date_seance,
            $duree,
            $activite,
            $equipement,
            $id_adherent,
            $id_salle
        );
    }

    public function delete(int $id): bool
    {
        return $this->seanceRepository->delete($id);
    }
}