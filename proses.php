<?php
include "database.php";

// include "../database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_pelanggan($_POST['nama'],$_POST['alamat'],$_POST['no_hp']);
    header('location:pelanggan-data.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_pelanggan($_GET['Id_pelanggan']);
   header('location:pelanggan-data.php');
}elseif($aksi == "update"){
    $database->Update_data_pelanggan($_POST['Id_pelanggan'],$_POST['nama'],$_POST['alamat'],$_POST['no_hp']);
    header('location:pelanggan-data.php');

}elseif($aksi == "tambahservice"){
    $database->Input_data_service($_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:service-data.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_service($_GET['id_service']);
    header('location:pelanggan-data.php');
}elseif($aksi == "update"){
    $database->Update_data_service($_POST['id_service'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:pelanggan-data.php');

}elseif($aksi == "tambahtransaksi"){
    $database->input_transaksi($_POST['id_pelanggan'],$_POST['id_service'],$_POST['status_transaksi']);
    header('location:transaksi-data.php');

}elseif($aksi == "tambah2tabel"){
    $database->Input_data_2( $_POST['nama'], $_POST['alamat'], $_POST['no_hp'], $_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'], $_POST['deskripsi']);
    header('location:index.php');
}
?>
<!-- id_service -->
