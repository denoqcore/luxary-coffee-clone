<?php



return new class 
{
    public function up(PDO $conn)
    {
        $conn->exec("
            CREATE TABLE IF NOT EXISTS products (
                id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                category_id TINYINT UNSIGNED NOT NULL,
                image VARCHAR(255) NOT NULL,
                brand VARCHAR(100) NOT NULL,
                name VARCHAR(150) NOT NULL,
                price DECIMAL(10,2) NOT NULL,
                description TEXT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ");
    }

    public function down(PDO $conn)
    {
        $conn->exec("DROP TABLE IF EXISTS user_roles;");
    }
};