<?php
include "config.php";

$nama = mysqli_real_escape_string($con, $_POST['nama']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepared statement untuk memeriksa username yang sudah ada
$stmt = $con->prepare("SELECT * FROM tb_user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Username sudah ada
    header("location: daftar.php?pesan=sama");
    exit();
} else {
    // Menyimpan user baru
    $insert_stmt = $con->prepare("INSERT INTO tb_user (nama, username, password) VALUES (?, ?, ?)");
    $insert_stmt->bind_param("sss", $nama, $username, $hashed_password);
    
    if ($insert_stmt->execute()) {
        // Berhasil menambahkan user
        header("location: index.php?page=buku");
        exit();
    } else {
        // Error saat menyimpan data
        die("Error: " . $insert_stmt->error);
    }
}

// Menutup statement dan koneksi
$stmt->close();
$insert_stmt->close();
$con->close();
?>
