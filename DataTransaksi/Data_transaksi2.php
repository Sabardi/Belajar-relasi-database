<?php
include "../database1.php";
$database = new Database();
$data_service = $database->Data_transaksi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>DATA TRANSAKSI</h1>

        <!-- <a href="AddData.php">Tambah data transaksi</a> -->
        <table border="1">
            <tr>
                <!-- berisi tabel pelanggan start -->
                <th>No</th>
                <th>nama</th>
                <th>alamat</th>
                <th>nomer telpon</th>
                <!-- tabel pelanggan end  -->

                <!-- tabel service start -->
                <th>nama perangkat</th>
                <th>model</th>
                <th>tanggal masuk</th>
                <th>deskripsi</th>
                <!-- end  -->

                <!-- tabel teknisi start -->
                <th>nama teknisi</th>
                <!-- end  -->

                <th>status pembayaran</th>
                <th>tanggal transaksi</th>
                <!-- <th>total biaya</th> -->

                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <!-- tabel pelanggan  -->
                <td><?= $data['nama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['no_hp']?></td>
                <!-- end  -->

                <!-- tabel service start -->
                <td><?= $data['nama_perangkat']?></td>
                <td><?= $data['model']?></td>
                <td><?= $data['tanggal_masuk']?></td>
                <!-- end  -->

                <!-- table teknisi start  -->
                <td><?= $data['nama_teknisi']?></td>

                <td><?= $data['status_transaksi']?></td>
                <td><?= $data['tanggal_transaksi']?></td>
                <!-- <td><?= $data['id_pembayaran']?></td> -->
                <td>
                    <a href="edit.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=edit">Edit</a>
                    <a href="proses.php?Id_pelanggan=<?= $data['Id_pelanggan']; ?>&aksi=hapus"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>

        <br>
        <button><a href="../index-admin.php">ke dashboard</a></button>
    </center>
    
</body>
</html>