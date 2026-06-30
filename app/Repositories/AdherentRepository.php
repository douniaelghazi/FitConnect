<?php

require_once __DIR__ . '/../../config/Database.php';

class AdherentRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM adherent";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): array|false
    {
        $sql = "SELECT * FROM adherent WHERE id_adherent = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    public function create(
        string $nom,
        string $prenom,
        string $email,
        string $telephone,
        int $id_salle
    ): bool {
        $sql = "INSERT INTO adherent
                (nom, prenom, email, telephone, id_salle)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle
        ]);
    }

    public function update(
        int $id,
        string $nom,
        string $prenom,
        string $email,
        string $telephone,
        int $id_salle
    ): bool {
        $sql = "UPDATE adherent
                SET nom = ?,
                    prenom = ?,
                    email = ?,
                    telephone = ?,
                    id_salle = ?
                WHERE id_adherent = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            $nom,
            $prenom,
            $email,
            $telephone,
            $id_salle,
            $id
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM adherent
                WHERE id_adherent = ?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);
    }

    public function hasAbonnement(int $id): bool
    {
        $sql = "SELECT COUNT(*) FROM abonnement WHERE id_adherent = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchColumn() > 0;
    }

    public function hasSeance(int $id): bool
    {
        $sql = "SELECT COUNT(*) FROM seance WHERE id_adherent = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetchColumn() > 0;
    }
}