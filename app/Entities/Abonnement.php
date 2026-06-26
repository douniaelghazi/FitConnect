<?php

class Abonnement
{
    private int $id_abonnement;
    private string $type_abonnement;
    private string $date_debut;
    private string $date_fin;
    private int $id_adherent;

    public function __construct(
        int $id_abonnement,
        string $type_abonnement,
        string $date_debut,
        string $date_fin,
        int $id_adherent
    ) {
        $this->id_abonnement = $id_abonnement;
        $this->type_abonnement = $type_abonnement;
        $this->date_debut = $date_debut;
        $this->date_fin = $date_fin;
        $this->id_adherent = $id_adherent;
    }

    public function getIdAbonnement(): int
    {
        return $this->id_abonnement;
    }

    public function getTypeAbonnement(): string
    {
        return $this->type_abonnement;
    }

    public function getDateDebut(): string
    {
        return $this->date_debut;
    }

    public function getDateFin(): string
    {
        return $this->date_fin;
    }

    public function getIdAdherent(): int
    {
        return $this->id_adherent;
    }
}