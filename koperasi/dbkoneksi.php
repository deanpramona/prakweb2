<?php
// konfigurasi database
$host = "localhost";
$dbname = "dbkoperasi";
$username = "root";
$password = "";

// buat koneksi PDO
// Menggunakan try catch

try {
    // buat object koneksi PDO yang diidalamnya ada parameter host dll
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // SET ateribut mengatur mode kesalahan

// echo "<h1>Database Berhasil Terhubung</h1>";

} catch (PDOException $e) {
    echo "Database tidak Terhubung: " .$e->getMessage();
}

?>