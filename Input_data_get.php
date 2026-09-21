<?php
include "koneksi.php";
?>

<form action="inputGET.php" method="GET">
<table>
<tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text" name="nama_barang"></td>
</tr>

<tr>
    <td>Harga</td>
    <td>:</td>
    <td><input type="text" name="harga"></td>
</tr>

<tr>
    <td>Kategori</td>
    <td>:</td>
    <td>
        <select name="id_kategori">
            <?php
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
    <td><input type="submit" value="Kirim"></td>
</tr>
</table>
</form>
