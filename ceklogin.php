<?php
include "config.php";

// Fungsi untuk membersihkan input dan mencegah SQL injection
function cleanInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Ambil data dari form login
$username = cleanInput($_POST['username']);
$password = cleanInput($_POST['password']);

// Periksa apakah username dan password diisi
if (!empty($username) && !empty($password)) {
  // Gunakan prepared statement untuk mencegah SQL injection
  $stmt = $con->prepare("SELECT * FROM tb_admin WHERE username=? AND password=?");
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    // Login berhasil untuk admin
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'admin'; // Simpan role untuk kontrol akses halaman
    header("Location: page/admin/index.php?page=buku");
    exit();
  } else {
    // Cek login untuk user biasa
    $stmt = $con->prepare("SELECT * FROM tb_user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      // Login berhasil untuk user biasa
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['id_user'] = $row['id_user'];
      $_SESSION['role'] = 'user'; // Simpan role untuk kontrol akses halaman
      header("Location: homepage.php");
      exit();
    } else {
      // Login gagal
      header("Location: login.php?pesan=gagal");
      exit();
    }
  }
} else {
  // Username atau password kosong
  header("Location: login.php?pesan=kosong");
  exit();
}
?>