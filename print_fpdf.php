<?php
include "koneksi.php";
require('fpdf/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'DATA BARANG',0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,7,'No',1);
$pdf->Cell(60,7,'Nama Barang',1);
$pdf->Cell(40,7,'Harga',1);
$pdf->Cell(50,7,'Kategori',1);
$pdf->Ln();

$pdf->SetFont('Arial','',10);

$no = 1;
$data = mysqli_query($conn,"
SELECT barang.nama_barang, barang.harga, kategori_barang.nama_kategori
FROM barang
JOIN kategori_barang 
ON barang.id_kategori = kategori_barang.id_kategori
");

while($d = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1);
    $pdf->Cell(60,7,$d['nama_barang'],1);
    $pdf->Cell(40,7,$d['harga'],1);
    $pdf->Cell(50,7,$d['nama_kategori'],1);
    $pdf->Ln();
}

$pdf->Output();
?>
