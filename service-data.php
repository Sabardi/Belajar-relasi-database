<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_Service();
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
        <h1>DATA PELANGGAN</h1>

        <a href="service-add.php">Tambah data pelanggan</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama perangkat</th>
                <th>model</th>
                <th>tanggal masuk</th>
                <th>deskripsi</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama_perangkat']?></td>
                <td><?= $data['model']?></td>
                <td><?= $data['tanggal_masuk']?></td>
                <td><?= $data['deskripsi']?></td>
                <td>
                    <a href="edit.php?Id_pelanggan=<?= $data['id_service']; ?>&aksi=edit">Edit</a>
                    <a href="proses.php?Id_pelanggan=<?= $data['id_service']; ?>&aksi=hapus"
                    onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>

        <br>
        <button><a href="index.php">ke dashboard</a></button>
    </center>
    
</body>
</html>