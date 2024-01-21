<?php
include "../database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_service($_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:DataService.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_service($_GET['id_service']);
   header('location:DataService.php');
}elseif($aksi == "update"){
    $database->Update_data_service($_POST['id_service'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:DataService.php');
}
?>