<!DOCTYPE html>
<html>
<head>
    <title>Input Data Barang</title>
</head>
<body>

<h3>Form Input Data Barang</h3>

<form action="InputPost_barang.php" method="POST">
<table>
    <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama_barang"></td>
    </tr>

    <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="number" name="harga"></td>
    </tr>

    <tr>
        <td>Kategori</td>
        <td>:</td>
        <td>
            <select name="id_kategori">
                <?php
                include "koneksi.php";
                $data = mysqli_query($conn,"SELECT * FROM kategori_barang");
                while($d = mysqli_fetch_array($data)){
                    echo "<option value='$d[id_kategori]'>$d[nama_kategori]</option>";
                }
                ?>
            </select>
        </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
</form>

</body>
</html>
