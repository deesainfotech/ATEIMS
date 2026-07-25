<?php

try {
    $pdo = new PDO(
        "pgsql:host=127.0.0.1;port=5432;dbname=ateims_db",
        "postgres",
        "1"
    );

    echo "Connected successfully!";
} catch (PDOException $e) {
    echo $e->getMessage();
}