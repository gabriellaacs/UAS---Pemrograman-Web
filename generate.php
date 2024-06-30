<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

// Buat Koneksi
$connection = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$connection) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}

// Buat Database
$query = "CREATE DATABASE IF NOT EXISTS db_sekolah";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Database <b>'db_sekolah'</b> berhasil dibuat... <br>";
}

// Pilih Database
$result = mysqli_select_db($connection, "db_sekolah");
if (!$result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Database <b>'db_sekolah'</b> berhasil dipilih... <br>";
}

// Buat Tabel student
$query = "DROP TABLE IF EXISTS siswa";
$query_result = mysqli_query($connection, $query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'siswa'</b> berhasil dihapus... <br>";
}

$query = "
CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    gender ENUM('Laki-Laki', 'Perempuan') NOT NULL,
    tanggal_lahir DATE NOT NULL,
    agama VARCHAR(50) NOT NULL,
    alamat TEXT NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nama_ayah VARCHAR(100),
    nama_ibu VARCHAR(100),
    no_hp_ortu VARCHAR(20) NOT NULL,
    alamat_ortu TEXT NOT NULL,
    photo VARCHAR(255),
    rata_nilai DECIMAL(5, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$query_result = mysqli_query($connection, $query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'siswa'</b> berhasil dibuat... <br>";
}

// Buat Tabel Admin
$query = "DROP TABLE IF EXISTS admin";
$query_result = mysqli_query($connection, $query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'admin'</b> berhasil dihapus... <br>";
}

$query = "CREATE TABLE admin (username VARCHAR(50), password VARCHAR(255))";
$query_result = mysqli_query($connection, $query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'admin'</b> berhasil dibuat... <br>";
}

// Insert Data Admin with hashed password
$username = "admin";
$password = "admin"; // Set the default password for the admin
$hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
$query = "INSERT INTO admin (username, password) VALUES ('$username', '$hashed_password')";
$query_result = mysqli_query($connection, $query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'admin'</b> berhasil diisi... <br>";
}

// To prevent SQL injection and ensure a secure database connection, 
// use prepared statements instead of regular queries.
$query = "DROP TABLE IF EXISTS contact_messages";
$stmt = $connection->prepare($query);
if (!$query_result) {
    die("Query Error: " . mysqli_errno($connection) . " - " . mysqli_error($connection));
} else {
    echo "Tabel <b>'contact_messages'</b> berhasil dihapus... <br>";
}

require 'db_connection.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS contact_messages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        subject VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $conn->exec($sql);
    echo "Database table <b>'contact_messages'</b> berhasil dibuat....<br>";
} catch (PDOException $e) {
    echo "Error creating table: " . $e->getMessage();
}

mysqli_close($connection);
?>

