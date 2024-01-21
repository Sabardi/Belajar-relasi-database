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
        <h1>Silahkan tambah data</h1>
        <form action="proses.php?aksi=update" method="post">
            <?php
            foreach($database->Edit_data_service($_GET['id_service']) as $data){
            ?>
            <table>

                <tr>
                    <td><span>id</span></td>
                    <td>:</td>
                    <td><input type="hidden" name="id_service" id="id_service" value="<?php echo $data['id_service'] ?>"></td>
                </tr>
                <tr>
                    <td><span>Nama perangkat</span></td>
                    <td>:</td>
                    <td>
                    <select name="nama_perangkat" id="nama_perangkat" value="<?php echo $data['nama_perangkat'] ?>">
                        <option value="komputer">komputer</option>
                        <option value="laptop">laptop</option>
                        <option value="perkalian">perkalian</option>
                        <option value="pembagian">pembagian</option>
                    </select>
                    <!-- <input type="text" name="nam a_perangkat" id="nama_perangkat" value="<?php echo $data['nama_perangkat'] ?>"></td> -->
                </tr>
                <tr>
                    <td><span>Model</span></td>
                    <td>:</td>
                    <td><input type="text" name="model" id="model" value="<?php echo $data['model'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_masuk">Tanggal Masuk</label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="<?php echo $data['tanggal_masuk'] ?>">
                    </td>
                    
                    
                </tr>
                <tr>
                    <td><span>Deskripsi</span></td>
                    <td>:</td>
                    <td>
                        <textarea  name="deskripsi" id="deskripsi" value="<?php echo $data['deskripsi'] ?>" cols="30" rows="10"></textarea>
                        <!-- <input type="text" name="deskripsi" id="deskripsi" value="<?php echo $data['deskripsi'] ?>"> -->
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
            <td>
            
            </td>
            <?php
            }
            ?>
        </form>
    </center>
</body>
</html>