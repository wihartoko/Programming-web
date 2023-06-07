<!-- export data ke ms excel -->
<?php
header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=laporan-excel.xls");

?>


<h3>Data barang</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>

    </tr>
    <!-- menampilkan data barang -->
    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($conn, "select * from barang");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "
    <tr>
        <td>$no</td>
        <td>$tampil[kode_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga_barang]</td>
    </tr>";
        $no++;
    }

    ?>

</table>