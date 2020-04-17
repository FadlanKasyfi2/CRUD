<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory</title>
</head>
<style>
    .container{
        border: solid black;
        margin-left: 400px;
        width: 500px;
        margin-bottom: 40px;
    }
    
</style>

<body>
    <?php 
        include('lib/koneksi.php');
        $kunci = $_GET['kunci'];
        $hasil = $con->query("SELECT * FROM `barang` WHERE `kd_barang` = '$kunci'");
        foreach ($hasil as $data) {?>
        
    <!-- inputan -->
    <div class="container">

    <form name="input data" action="edit.php" method="POST">
        <table  cellpadding="10" cellspacing="0">
            <tr>
                <td colspan="2"><b>FORM EDIT MASTER dan STOK DATA BARANG</b></td>
            </tr>

            <tr>
                <td>kode produk</td>
                <td><input type="text" name="kd_barang" value="<?php echo $data['kd_barang'];?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nm_barang" value="<?php echo $data['nm_barang'];?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" value="<?php echo $data['harga'];?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>
                    <select name="satuan">
                        <option <?php if ($data['satuan'] == "Null") {echo "selected=selected";}?> value="Null">Pilih Satuan</option>
                        <option <?php if ($data['satuan'] == "Kilo") {echo "selected=selected";}?> value="Kilogram">Kilo</option>
                        <option <?php if ($data['satuan'] == "Gram") {echo "selected=selected";}?> value="Gram">Gram</option>
                        <option <?php if ($data['satuan'] == "Box") {echo "selected=selected";}?> value="Box">Box</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori">
                        <option <?php if ($data['kategori']=='Null') { echo "selected=selected"; }?> value="Null">Pilih Kategori</option>
                        <option <?php if ($data['kategori']=='Cair') { echo "selected=selected"; }?> value="Cair">Cair</option>
                        <option <?php if ($data['kategori']=='Padat') { echo "selected=selected"; }?> value="Padat">Padat</option>
                        <option <?php if ($data['kategori']=='Gas') { echo "selected=selected"; }?> value="Gas">Gas</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>url gambar</td>
                <td><input type="url" name="url" id="gambar" value="<?php echo $data['url'];?>"></td>
            </tr>
            <tr>
                <td>Stok awal</td>
                <td><input type="number" name="stok" value="<?php echo $data['stok'];?>"></td>
            </tr>
            <tr>
                <td><button style="background-color: green ;" type="submit" name="btnsimpan" value="simpan">Simpan</button></td>
                <td><button style="background-color: yellow ;" type="submit" name="btnbatal" value="null"><a href="inventory.php" style="text-decoration: none;color: black">batal</a></button></td>
            </tr>
        </table>
    </form>
        </div>
    <?php } ?>
    <!-- list data -->
    <?php
        // $tampil = include('outputTabel.php');
        // echo $tampil;
    ?>
</body>
</html>