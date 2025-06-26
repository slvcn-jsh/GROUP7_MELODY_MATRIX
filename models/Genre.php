<?php
class Genre {
    public static function getAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM genres ORDER BY name ASC");
        return $stmt->fetchAll();
    }
    public static function find($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM genres WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
