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
        <form action="proses.php?aksi=tambah2tabel" method="post">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">alamat</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <td><label for="no_hp">No telpon</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="no_hp" id="no_hp">
                    </td>
                </tr>

                <tr>
                    <td><span>Nama perangkat</span></td>
                    <td>:</td>
                    <td>
                    <select name="nama_perangkat" id="nama_perangkat">
                        <option value="komputer">komputer</option>
                        <option value="laptop">laptop</option>
                        <option value="perkalian">perkalian</option>
                        <option value="pembagian">pembagian</option>
                    </select>
                    <!-- <input type="text" name="nama_perangkat" id="nama_perangkat"></td> -->
                </tr>
                <tr>
                    <td><span>Model</span></td>
                    <td>:</td>
                    <td><input type="text" name="model" id="model"></td>
                </tr>
                <tr>
                    <td><label for="tanggal_masuk">Tanggal Masuk</label></td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk">
                    </td>
                    
                    
                </tr>
                <tr>
                    <td><span>Deskripsi</span></td>
                    <td>:</td>
                    <td>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                        <!-- <input type="text"name="deskripsi" id="deskripsi"> -->
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <button type="submit">simpan</button>
                    <button><a href="service-data.php">Batal</a></button>
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>
</html>