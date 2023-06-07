<?php
include "koneksi.php";

$sql = mysqli_query($conn, "select max(id) as maxID from transaksi");
$data = mysqli_fetch_array($sql);

$kode = $data['maxID'];

$kode++;
$ket = date("ymd ");
$kodeauto = $ket  .  sprintf("(%03s)", $kode);

echo $kodeauto;
