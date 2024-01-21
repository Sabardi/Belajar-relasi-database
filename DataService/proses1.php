<?php
include "../database.php";
$database = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $database->tambah_service($_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:DataService.php');
}elseif($aksi=="update"){
    
    $database->edit_service($_POST['id_service'],$_POST['nama_perangkat'],$_POST['model'],$_POST['tanggal_masuk'],$_POST['deskripsi']);
    header('location:DataService.php');
}

?>