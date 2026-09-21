<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cari Barang</title>
</head>
<body>
    <h4>Pencarian Data Barang</h4>
    <?php
    $pola= $_POST['nama-yang-dicari'] ?? '';
    $sql= "SELECT * FROM barang WHERE nama_barang LIKE '$pola%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<h1>Data tidak ditemukan</h1>";
        echo "<br>";
    } else {
        echo "<table border='1'>
                <thead>
                    <tr>
                        <th>NAMA BARANG</th>
                        <th>HARGA</th>
                        <th>KATEGORI</th>
                    </tr>
                </thead>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tbody>";
            echo "<tr>";
            echo "<td>" . $row['nama_barang'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['id_kategori'] . "</td>";
            echo "</tr>";
            echo "</tbody>";
        }
        echo "</table>";
    }
    mysqli_close($conn);
    ?>
</body>
</html>
