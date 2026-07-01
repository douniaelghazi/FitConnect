<?php

require_once __DIR__ . '/../../config/Database.php';

class SeanceRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM seance";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): array|false
    {
        $sql = "SELECT * FROM seance WHERE id_seance = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create(
        string $date_seance,
        int $duree,
        string $activite,
        ?string $equipement,
        int $id_adherent,
        int $id_salle
    ): bool {

        $sql = "INSERT INTO seance
        (date_seance,duree,activite,equipement,id_adherent,id_salle)
        VALUES(?,?,?,?,?,?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $date_seance,
            $duree,
            $activite,
            $equipement,
            $id_adherent,
            $id_salle
        ]);
    }

    public function update(
        int $id,
        string $date_seance,
        int $duree,
        string $activite,
        ?string $equipement,
        int $id_adherent,
        int $id_salle
    ): bool {

        $sql = "UPDATE seance
                SET
                date_seance=?,
                duree=?,
                activite=?,
                equipement=?,
                id_adherent=?,
                id_salle=?
                WHERE id_seance=?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $date_seance,
            $duree,
            $activite,
            $equipement,
            $id_adherent,
            $id_salle,
            $id
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM seance WHERE id_seance=?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);
    }
}