<?php
$nama = "Arisandy";
$kelas = "XIR2";
$alamat = "Jalan Danau Ranau";
function tampil_nama()
{
  global$nama;
  echo "Nama Saya ".$nama;
  echo "<br>";
}
tampil_nama();
function tampil_kelas()
{
  global$kelas;
  echo "Kelas Saya ".$kelas;
  echo "<br>";
}
tampil_kelas();
function tampil_alamat()
{
  global$alamat;
  echo "Alamat Saya ".$alamat;
}
tampil_alamat();
?>
