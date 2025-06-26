<?php
class Track {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT tracks.*, albums.title AS album_title, artists.name AS artist_name FROM tracks JOIN albums ON tracks.album_id = albums.id JOIN artists ON tracks.artist_id = artists.id ORDER BY tracks.title ASC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT tracks.*, albums.title AS album_title, artists.name AS artist_name FROM tracks JOIN albums ON tracks.album_id = albums.id JOIN artists ON tracks.artist_id = artists.id WHERE tracks.id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
