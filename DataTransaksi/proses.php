<?php
include "../database.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->Input_data_pelanggan($_POST['nama'],$_POST['alamat'],$_POST['no_hp']);
    header('location:index_pelanggan.php');
}elseif($aksi == "hapus"){ 	
    $database->Hapus_data_pelanggan($_GET['Id_pelanggan']);
   header('location:index_pelanggan.php');
}elseif($aksi == "update"){
    $database->Update_data_pelanggan($_POST['Id_pelanggan'],$_POST['nama'],$_POST['alamat'],$_POST['no_hp']);
    header('location:index_pelanggan.php');
}
?>