<?php
include "koneksi.php";

$nama_barang = $_POST['nama_barang'];
$harga       = $_POST['harga'];
$id_kategori = $_POST['id_kategori'];

$query = mysqli_query($conn,"INSERT INTO barang 
VALUES (NULL,'$nama_barang','$harga','$id_kategori')");

if($query){
    echo "Data berhasil disimpan";
}else{
    echo "Data gagal disimpan";
}
?>
