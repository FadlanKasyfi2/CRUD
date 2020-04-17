<?php 
    include('lib/koneksi.php');
    $kode = $_POST['kd_barang'];
    $namabrng = $_POST['nm_barang'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['url'];
    $stok = $_POST['stok'];
    

    $query = $con->exec("UPDATE `barang` SET `nm_barang` = '$namabrng', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kategori', `url` = '$gambar', `stok` = '$stok' WHERE `barang`.`kd_barang` = '$kode';");
    

    if ($query==TRUE) {
       
        echo 'data berhasil di edit';
        header("location:inventoryy.php?info=data berhasil di edit");
    } else {
        echo 'data gagal di edit';
    }

?>