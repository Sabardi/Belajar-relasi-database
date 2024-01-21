<?php
include "../database.php";
$database = new database();
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
        <form action="proses.php?aksi=update" method="post">
        <?php
foreach($database->edit_service($_GET['id_service']) as $data){
?>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <input type="hidden" name="id" value="<?php echo $data['id_service'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="nama_perangkat">Nama perangkat</label></td>
                    <td>:</td>
                    <td>
            			<input type="text" name="nama_perangkat" value="<?php echo $data['nama_perangkat'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="model">Model</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="model" id="model" value="<?= $data['model'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="tanggal_masuk">Tanggal_masuk</label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?= $data['tanggal_masuk'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="deskripsi" id="deskripsi" value="<?= $data['deskripsi'] ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">simpan</button>
                        <button><a href="DataService.php">Batal</a></button>
                    </td>
                </tr>
            </table>
            <?php
    }
    ?>
        </form>
    </center>

</body>
</html>