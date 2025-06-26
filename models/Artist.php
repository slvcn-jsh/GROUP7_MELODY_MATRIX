<?php
class Artist {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM artists ORDER BY name ASC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM artists WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
