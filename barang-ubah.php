<?php
include "koneksi.php";
$sql = mysqli_query($conn, "select* from barang where kode_barang='$_GET[kode]'");
$data = mysqli_fetch_array($sql);

?>
<h3>Ubah Barang</h3>
<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode Barang</td>
            <!-- tambahkan value dan php untuk ubah data -->
            <td><input type="number" name="kodebarang" value="<?php echo $data['kode_barang']; ?>"> </td>
        </tr>
        <tr>
            <td width="130">nama Barang</td>
            <td><select name="namabarang" id="namabarang">
                    <option value="<?php echo $data['nama_barang']; ?>">pulpen</option>
                    <option value="pulpen">pulpen</option>
                    <option value="penghapus">penghapus</option>
                    <option value="buku">buku</option>
                </select></td>
        </tr>
        <tr>
            <td width="130">harga Barang</td>
            <td><input type="text" name="hargabarang" value="<?php echo $data['harga_barang']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="simpan"></td>
        </tr>
    </table>
</form>
<!-- ubah data barang -->
<?php
include "koneksi.php";
// database = '$_POST[ name field]'
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "update barang set
    nama_barang = '$_POST[namabarang]',
    harga_barang = '$_POST[hargabarang]'
    where kode_barang = $_GET[kode]
    ");
    echo "data barang  telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='barang-data.php'>";
}

?>