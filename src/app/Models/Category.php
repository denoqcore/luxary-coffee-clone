<?php
namespace App\Models;

use PDO;

class Category extends Model
{
    public static function all(): array
    {
        $stmt = self::getConn()->prepare("SELECT id, name FROM categories ORDER BY id ASC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
