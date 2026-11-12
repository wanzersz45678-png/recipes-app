<?php
$host = getenv('DB_HOST') ?: 'mysql';
$port = getenv('DB_PORT') ?: '3306';
$name = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$name;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    http_response_code(500);
    die('Ошибка подключения к БД: ' . htmlspecialchars($e->getMessage()));
}