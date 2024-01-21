<?php
include '../database.php';
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
        <h1>Edit data pelanggan</h1>
        <form action="proses.php?aksi=update" method="post">
            <?php
            foreach($database->Edit_data_pelanggan($_GET['Id_pelanggan']) as $data){
            ?>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="text" name="Id_pelanggan" id="Id_pelanggan" value="<?php echo $data['Id_pelanggan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">alamat</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" >
                    </td>
                </tr>
                <tr>
                    <td><label for="no-hp">No telpon</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_hp" id="no_hp" value="<?php echo $data['no_hp']; ?>" >
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
            <?php
            }
            ?>
        </form>
    </center>
</body>
</html>