<?php
class Historique {
    private $db;
    public function historique ($connexion) {
        $this->db = $connexion;
    }
    public function sauvegarder($userId, $movieId, $secondes) {
        $sql = "INSERT INTO historique (use_id, movie_id, dateVisionnage, progressionSecond) 
                VALUES (:uid, :mid, NOW(), :prog) 
                ON DUPLICATE KEY UPDATE 
                dateVisionnage = NOW(), 
                progressionSecond = :prog";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':uid'  => $userId,
            ':mid'  => $movieId,
            ':prog' => $secondes
        ]);
    }
    public function lister($userId) {
        $sql = "SELECT h.*, m.title, m.image_url 
                FROM historique h 
                JOIN movies m ON h.movie_id = m.id 
                WHERE h.use_id = ? 
                ORDER BY h.dateVisionnage DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}