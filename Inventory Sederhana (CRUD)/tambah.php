<?php 
    
    include('lib/koneksi.php');

    $kode = $_POST['kd_barang'];
    $namabrng = $_POST['nm_barang'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['url'];
    $stok = $_POST['stok'];
    $tgl = $_POST['tanggal'];

    $query = $con->exec("INSERT INTO `barang` (`kd_barang`, `nm_barang`, `harga`, `satuan`, `kategori`, `url`, `stok`, `tanggal`) VALUES ('$kode', '$namabrng', '$harga', '$satuan', '$kategori', '$gambar', '$stok', '$tgl')");
    echo $result;

    if(result == true){
        echo 'data dimasukan';
        header("location:inventoryy.php?info=data di masukan");
    }else{
        echo "data gagal dimasukan";
    }
?>