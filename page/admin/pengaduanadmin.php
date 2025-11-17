<?php
include "../../config.php";

// Query untuk mendapatkan data pengaduan
$qry_buku = mysqli_query($con, "SELECT * FROM tb_pengaduan");

if (!$qry_buku) {
    die("Query failed: " . mysqli_error($con));
}

$no = 1;
?>

<div class="row">
    <div class="col-lg-12">
        <div class="product-status-wrap">
            <table style="margin-top:20px;" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Transportasi</th>
                        <th>Plat Nomor Kendaraan</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_array($qry_buku)) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo htmlspecialchars($data['nama']); ?></td>
                        <td><?php echo htmlspecialchars($data['email']); ?></td>
                        <td><?php echo htmlspecialchars($data['subject']); ?></td>
                        <td><?php echo htmlspecialchars($data['plat']); ?></td>
                        <td><?php echo htmlspecialchars($data['message']); ?></td>
                        <td>
                            <a href="editpengaduan.php?id=<?php echo $data['id_pengaduan']; ?>">Edit</a>
                            <a href="hapuspengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
