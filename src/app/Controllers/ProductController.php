<?php
namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function product()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) die('Товар не найден');

        $product = Product::findById($id);
        if (!$product) die('Такого товара нет');

        require __DIR__ . '/../Views/product.php';
    }
}
