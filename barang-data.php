<h3>Data barang</h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
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
        <td><a href='?kode=$tampil[kode_barang]'> Hapus </a> </td>
        <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'> Ubah </a> </td>
    </tr>";
        $no++;
    }

    ?>

</table>

<!-- hapus data -->
<?php
if (isset($_GET['kode'])) {

    mysqli_query($conn, "delete from barang where kode_barang= '$_GET[kode]'");
    echo "data telah terhapus";
    // untuk merefresh halaman otomatis
    echo "<meta http-equiv=refresh content=2;URL='barang-data.php'>";
}
?>

<!-- tombol menuju laporan-excel.php -->
<p>
    <input type="button" value="Export Excel" onclick="window.open('laporan-excel.php')">
</p>