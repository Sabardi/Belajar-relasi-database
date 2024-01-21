<?php
include "database.php";
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
        <h1>DATA Data_transaksi</h1>
        <a href="transaksi-add.php">add data</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>perangkat</th>
                <th>status</th>
                <!-- <th>aksi</th> -->
            </tr>

            <?php
            $no = 1;
            foreach($data_service as $data){

            ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $data['nama']?></td>
                <td><?= $data['nama_perangkat']?></td>
                <td><?= $data['status_transaksi']?></td>
                
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