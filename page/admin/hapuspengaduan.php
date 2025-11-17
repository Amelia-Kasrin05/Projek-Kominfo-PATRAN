<?php
include('config.php');
$bk=$_GET['id'];
mysqli_query($con,"DELETE FROM tb_pengaduan WHERE id_pengaduan='$bk'");
header("location:index.php?page=pengaduanadmin");
 ?>