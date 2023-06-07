<h3>Tambah Barang</h3>
<form action="" method="post">
    <table>
        <tr>
            <td width="130">Kode Barang</td>
            <td><input type="number" name="kodebarang"></td>
        </tr>
        <tr>
            <td width="130">nama Barang</td>
            <td><select name="namabarang" id="namabarang">
                    <option value="pulpen">pulpen</option>
                    <option value="penghapus">penghapus</option>
                    <option value="buku">buku</option>
                </select></td>
        </tr>
        <tr>
            <td width="130">harga Barang</td>
            <td><input type="text" name="hargabarang"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="simpan"></td>
        </tr>
    </table>
</form>

<?php
include "koneksi.php";
// database = '$_POST[ name field]'
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "insert into barang set
    kode_barang = '$_POST[kodebarang]',
    nama_barang = '$_POST[namabarang]',
    harga_barang = '$_POST[hargabarang]'
    ");
    echo "data barang baru telah tersimpan";
}

?>