<?php
include "koneksi.php";

$nama_barang = $_GET['nama_barang'];
$harga       = $_GET['harga'];
$id_kategori = $_GET['id_kategori'];

mysqli_query($conn,"INSERT INTO barang 
VALUES (NULL,'$nama_barang','$harga','$id_kategori')");

echo "Data berhasil dikirim menggunakan method GET<br>";
echo "Nama Barang : $nama_barang <br>";
echo "Harga : $harga <br>";
echo "Kategori : $id_kategori";
?>
