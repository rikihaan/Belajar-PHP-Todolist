<?php

use Config\Database;

require_once __DIR__ . "/Database.php";

try {
    $connection = Database::getConnection();
    echo " Database Sukses terkoneksi";
} catch (PDOException $exception) {
    echo "Gagal Conneksi ke database " . $exception->getMessage();
}
