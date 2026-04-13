<?php
class ProchainMedia{
    private $db;
    public function ProchaineMedia($connexion) {
        $this->db = $connexion;
    }
    public function ajouter($userId, $movieId) {
        $sql = "INSERT IGNORE INTO prochainMedia (user_id, movie_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId, $movieId]);
    }
    public function supprimer($userId, $movieId) {
        $sql = "DELETE FROM prochainMedia WHERE user_id = ? AND movie_id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$userId, $movieId]);
    }
    public function lister($userId) {
        $sql = "SELECT p.dateAjout, m.* FROM prochainMedia p
                JOIN movies m ON p.movie_id = m.id
                WHERE p.user_id = ?
                ORDER BY p.dateAjout DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}