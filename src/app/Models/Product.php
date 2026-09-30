<?php
namespace App\Models;

use Dba\Connection;
use PDO; 

class Product extends Model
{
    public static function all(): array
    {
        $stmt = self::getConn()->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByCategory(int $categoryId): array
    {
        $stmt = self::getConn()->prepare("SELECT * FROM products WHERE category_id = :id");
        $stmt->execute(['id' => $categoryId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   public static function findById($id)
    {
        $stmt = self::getConn()->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
