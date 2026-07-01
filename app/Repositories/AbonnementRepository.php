<?php

require_once __DIR__ . '/../../config/Database.php';

class AbonnementRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM abonnement";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $sql = "SELECT * FROM abonnement
                WHERE id_abonnement = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        string $type_abonnement,
        string $date_debut,
        string $date_fin,
        int $id_adherent
    ): bool {

        $sql = "INSERT INTO abonnement
                (type_abonnement, date_debut, date_fin, id_adherent)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $type_abonnement,
            $date_debut,
            $date_fin,
            $id_adherent
        ]);
    }

    public function update(
        int $id,
        string $type_abonnement,
        string $date_debut,
        string $date_fin,
        int $id_adherent
    ): bool {

        $sql = "UPDATE abonnement
                SET type_abonnement = ?,
                    date_debut = ?,
                    date_fin = ?,
                    id_adherent = ?
                WHERE id_abonnement = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $type_abonnement,
            $date_debut,
            $date_fin,
            $id_adherent,
            $id
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM abonnement
                WHERE id_abonnement = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);
    }
}
