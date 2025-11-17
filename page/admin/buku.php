<?php
include "../../config.php";
$no = 1;
$qry_buku = mysqli_query($con, "SELECT * FROM tb_user");

if (!$qry_buku) {
    die("Query failed: " . mysqli_error($con));
}
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="product-status-wrap">
            <a href="index.php?page=input_buku" class="btn btn-success" style="margin-top:20px;">
                <span class="glyphicon glyphicon-plus"> TAMBAH USER</span>
            </a>
            <?php
            $aksi = $_GET['aksi'] ?? '';
            if ($aksi == "input") {
                include("input_buku.php");
            }
            ?>
            <table style="margin-top:20px;">
                <tr>
                    <th></th>
                    <th><center>No</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Username</center></th>
                    <th><center>Password</center></th>
                    <th><center>Aksi</center></th>
                </tr>
                <?php while ($data = mysqli_fetch_array($qry_buku)) { ?>
                <tr>
                    <td></td>
                    <td><center><?php echo $no++ ?></center></td>
                    <td><center><?php echo $data['nama'] ?></center></td>
                    <td><center><?php echo $data['username'] ?></center></td>
                    <td><center><?php echo $data['password'] ?></center></td>
                    <td>
                        <a href="index.php?page=editbuku&id=<?php echo $data['id_user']; ?>">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>&nbsp;
                        <a href="hapus_book.php?id=<?php echo $data['id_user']; ?>">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
