<?php
class Album {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT albums.*, artists.name AS artist_name FROM albums JOIN artists ON albums.artist_id = artists.id ORDER BY albums.release_date DESC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT albums.*, artists.name AS artist_name FROM albums JOIN artists ON albums.artist_id = artists.id WHERE albums.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
