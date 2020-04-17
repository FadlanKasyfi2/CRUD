<?php 
include('lib/koneksi.php');
$key= $_GET['key'];
$hasil=$con->query("DELETE FROM `barang` WHERE `barang`.`kd_barang` = $key");

if ($hasil==TRUE) {
    # code...
    header("location:inventoryy.php?info=data berhasil di hapus");
} else {
    echo 'data gagal di hapus';
}
?>