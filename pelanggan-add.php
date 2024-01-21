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
        <form action="proses.php?aksi=tambah" method="post">
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