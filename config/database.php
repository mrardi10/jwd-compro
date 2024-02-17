<?php
// Konfigurasi koneksi database
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "jwd-compro";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Menutup koneksi
// $conn->close();
?>
