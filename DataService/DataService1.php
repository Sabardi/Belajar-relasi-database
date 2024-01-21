<?php
include "../database/database.php";
$database = new Database();
$data_service = $database->Data_Service();
?>

    <!-- <center> -->
        <h1>DATA SERVICE</h1>
        <a href="AddData.php">[+] Add layanan</a>
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <tr class="text-dark">
                <th scope="col">No</th>
                <th scope="col">Nama Perangkat</th>
                <th>model</th>
                <th>Tanggal masuk</th>
                <th>Deskripsi</th>
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
                <a href="edit.php?id_service=<?php echo $data['id_service']; ?>&aksi=edit">Edit</a>
                <a href="proses.php?id_service=<?php echo $data['id_service']; ?>&aksi=hapus"
            	onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    <button><a href="../index-admin.php">kembali ke dashbord</a></button>

    <!-- </center>     -->