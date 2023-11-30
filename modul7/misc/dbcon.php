<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "bookingsystemdbtest");
    $dsn = "mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER;

    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>