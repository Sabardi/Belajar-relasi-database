<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_Pelanggan();
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

        <a href="pelanggan-add.php">Tambah data pelanggan</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>no telpon</th>
                <th>aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['no_hp']?></td>
                <td>
                    <a href="edit.php?Id_pelanggan=<?= $data['id_pelanggan']; ?>&aksi=edit">Edit</a>
                    <a href="proses.php?Id_pelanggan=<?= $data['id_pelanggan']; ?>&aksi=hapus"
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