<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data Barang</title>
</head>
<body>

<h3>Data Barang</h3>

<!-- FORM PENCARIAN -->
<form method="get">
    Cari Nama Barang :
    <input type="text" name="cari"
        value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <input type="submit" value="Cari">
</form>

<br>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga</th>
</tr>

<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $data = mysqli_query($conn,
        "SELECT * FROM barang
         WHERE nama_barang LIKE '%$cari%'");
} else {
    $data = mysqli_query($conn,
        "SELECT * FROM barang");
}

$no = 1;
while ($d = mysqli_fetch_array($data)) {
    echo "<tr>
        <td>$no</td>
        <td>$d[nama_barang]</td>
        <td>$d[harga]</td>
    </tr>";
    $no++;
}
?>
</table>

<br>

<!-- TOMBOL CETAK PDF DI BAWAH -->
<a href="print_fpdf.php?cari=<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button>Cetak PDF</button>
</a>

</body>
</html>
