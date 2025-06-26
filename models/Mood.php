<?php
class Mood {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM moods ORDER BY name ASC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM moods WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
