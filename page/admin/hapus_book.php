<?php
include('config.php');
$bk=$_GET['id'];
mysqli_query($con,"DELETE FROM tb_user WHERE id_user='$bk'");
header("location:index.php?page=buku");
 ?>