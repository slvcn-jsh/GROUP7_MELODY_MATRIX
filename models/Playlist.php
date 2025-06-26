<?php
class Playlist {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM playlists ORDER BY created_at DESC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM playlists WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    public static function getTracks($pdo, $playlist_id) {
        $stmt = $pdo->prepare("SELECT tracks.* FROM playlist_tracks JOIN tracks ON playlist_tracks.track_id = tracks.id WHERE playlist_tracks.playlist_id = ? ORDER BY playlist_tracks.track_order ASC");
        $stmt->execute([$playlist_id]);
        return $stmt->fetchAll();
    }
}
