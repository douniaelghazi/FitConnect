<?php

require_once __DIR__ . '/../../config/Database.php';

class SalleRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM salle";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findById(int $id): array|false
    {
        $sql = "SELECT * FROM salle
                WHERE id_salle = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        string $nom_salle,
        string $adresse
    ): bool {

        $sql = "INSERT INTO salle
                (nom_salle, adresse)
                VALUES (?, ?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $nom_salle,
            $adresse
        ]);
    }

    public function update(
        int $id,
        string $nom_salle,
        string $adresse
    ): bool {

        $sql = "UPDATE salle
                SET nom_salle = ?,
                    adresse = ?
                WHERE id_salle = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $nom_salle,
            $adresse,
            $id
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM salle
                WHERE id_salle = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);
    }
}