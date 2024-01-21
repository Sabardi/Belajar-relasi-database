<?php
include "database.php";
$database = new Database();
$data_pelanggan = $database->Data_Pelanggan();
$data_service = $database->Data_service();
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
        <h1>Tambah data pelanggan</h1>
        <form action="proses.php?aksi=tambahtransaksi" method="post">
            <table>
                
                <tr>
                    <td><span>Nama</span></td>
                    <td>:</td>
                    <td>
                    <select name="id_pelanggan" id="id_pelanggan">
                        <option value="">pilih</option>
                        <?php
                        foreach($data_pelanggan as $data){
                        ?>
                        <option value="<?= $data['id_pelanggan'] ?>"><?= $data['nama'] ?></option>
                        <?php }?>
                    </select>
                </tr>
                
                <tr>
                    <td><span>perangkat</span></td>
                    <td>:</td>
                    <td>
                    <select name="id_service" id="id_service ">
                        <option value="">pilih</option>
                        <?php
                        foreach($data_service as $data){
                        ?>
                        <option value="<?= $data['id_service'] ?>"><?= $data['nama_perangkat'] ?></option>
                        <?php }?>
                    </select>
                    <!-- <input type="text" name="nama_perangkat" id="nama_perangkat"></td> -->
                </tr>

                <tr>
                    <td><label for="no_hp">status</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="status_transaksi" id="status_transaksi">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">simpan</button>
                        <button><a href="index_pelanggan.php">batal</a></button>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>