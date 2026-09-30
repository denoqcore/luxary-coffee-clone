<?php

namespace App\Models;

use PDO;

class User extends Model
{
    public static function loggedIn(): bool
    {
        return isset($_SESSION["user_id"]);
    }

    public static function getUserById($id): ?array
    {
        $stmt = self::getConn()->prepare("SELECT * FROM users WHERE id = :a LIMIT 1");
        $stmt->execute([":a" => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public static function getUserRoles($userId): array
    {
        if (!$userId) return [];

        $stmt = self::getConn()->prepare("
            SELECT r.name
            FROM user_roles ur
            JOIN roles r ON ur.role_id = r.id
            WHERE ur.user_id = :id
        ");
        $stmt->execute([':id' => $userId]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN) ?: [];
    }

    public static function isAdmin($userId): bool
    {
        $roles = self::getUserRoles($userId);
        return in_array('admin', $roles);
    }
}
