<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "dbbst";
$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $plat = mysqli_real_escape_string($con, $_POST['plat']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $query = "INSERT INTO tb_pengaduan (nama, email, subject, plat, message) VALUES ('$nama', '$email', '$subject', '$plat', '$message')";
    
    if (mysqli_query($con, $query)) {
        echo "Pengaduan Anda telah terkirim.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
