<?php

class Seance
{
    private int $id_seance;
    private string $date_seance;
    private int $duree;
    private string $activite;
    private ?string $equipement;
    private int $id_adherent;
    private int $id_salle;

    public function __construct(
        int $id_seance,
        string $date_seance,
        int $duree,
        string $activite,
        ?string $equipement,
        int $id_adherent,
        int $id_salle
    ) {
        $this->id_seance = $id_seance;
        $this->date_seance = $date_seance;
        $this->duree = $duree;
        $this->activite = $activite;
        $this->equipement = $equipement;
        $this->id_adherent = $id_adherent;
        $this->id_salle = $id_salle;
    }

    public function getIdSeance(): int
    {
        return $this->id_seance;
    }

    public function getDateSeance(): string
    {
        return $this->date_seance;
    }

    public function getDuree(): int
    {
        return $this->duree;
    }

    public function getActivite(): string
    {
        return $this->activite;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function getIdAdherent(): int
    {
        return $this->id_adherent;
    }

    public function getIdSalle(): int
    {
        return $this->id_salle;
    }
}