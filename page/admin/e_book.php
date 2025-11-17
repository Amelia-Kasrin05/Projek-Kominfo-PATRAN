<?php
include("../../config.php");

// Ambil data dari form dan sanitasi input
$a = mysqli_real_escape_string($con, $_POST['id_user']);
$b = mysqli_real_escape_string($con, $_POST['nama']);
$c = mysqli_real_escape_string($con, $_POST['username']);
$d = mysqli_real_escape_string($con, $_POST['password']);

// Query untuk memperbarui data
$query = "UPDATE tb_user SET nama='$b', username='$c', password='$d' WHERE id_user='$a'";
$result = mysqli_query($con, $query);

// Cek apakah query berhasil
if ($result) {
    header("Location: index.php?page=buku");
    exit();
} else {
    // Tampilkan pesan kesalahan jika query gagal
    echo "Error updating record: " . mysqli_error($con);
}
?>
