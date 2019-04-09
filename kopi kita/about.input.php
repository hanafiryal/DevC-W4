<?php
// konfigurasi database
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "kopi_kita";

$connection = mysqli_connect($dbhost, $username, $password, $dbname);
if (isset($_POST['btnsubmit'])){
  $tgl_beli = $_POST['tgl_beli'];
  $kd_transaksi = $_POST['kd_transaksi'];
  $id_karyawan= $_POST['id_karyawan'];
  $kd_pembeli= $_POST['kd_pembeli'];
  $kd_menu= $_POST['kd_menu'];
  $nama_menu= $_POST['nama_menu'];
  $jumlah_beli= $_POST['jumlah_beli'];
  $total_bayar = $_POST['total_bayar'];

$sql = "insert into supplier(id_supplier,kd_menu,nama_menu,Harga) values('$id_supplier', '$kd_menu', '$nama_menu', '$Harga')";
$result = mysqli_query($connection,$sql);
  if($result){
    echo "Data yang anda masukan berhasil";
  } else {
    echo "Data gagal dimasukan";
  }
}
?>