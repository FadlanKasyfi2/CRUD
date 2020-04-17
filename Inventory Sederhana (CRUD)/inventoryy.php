<?php
    include('lib/koneksi.php');
    
    $kuery = $con->prepare("SELECT MAX(`kd_barang`) AS kd_barang FROM `barang`");
    $kuery->execute();
    $hasil = $kuery->fetch();
    $kode = $hasil['kd_barang'];

    $kp = (int) substr($kode,3);
    $kp++;

    $car="AUTO-";
    $kodeProduk = $car.sprintf("%03s",$kp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inventory</title>
</head>
<style>
    .container{
        border: solid black;
        margin-left: 400px;
        width: 500px;
        margin-bottom: 50px;
    }
    
</style>
<body>
    <div class="container">

    <!-- tambah data -->
    <form name="input data" action="tambah.php" method="POST">
        <table cellpading="10" cellspacing="0">
            <tr>
                <td colspan="5" ><b>FORM EDIT MASTER & STOK DATA BARANG</b></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
            <td></td>
            </tr>
            <tr>
            <td>Kode produk</td>
                <td><input type="text" name="kd_barang" value="<?php echo $kodeProduk ?>" readonly></td>
            </tr>
            <tr>
                <td><p>Nama Produk</p></td>
                <td><input type="text" name="nm_barang"  id="nampro" class="nama"></td>
            </tr>
            <tr>
                <td><p>Harga Produk</p></td>
                <td><input type="text" name="harga" id="harpro" class="harg"></td>
            </tr>
            <tr>
                <td><p>Satuan</p></td>
                <td><select name="satuan" id="sat" class="pilih">
                    <option value="Null">pilih satuan</option>
                    <option value="PCS">PCS</option>
                    <option value="Kardus">Kardus</option>
                </td>
            </tr>
            <tr>
                <td><p>Kategori</p></td>
                <td><select name="kategori" id="kat" class="pilih">
                    <option value="Null">pilih kategori</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Snack">Snack</option></select>
            </tr>
            <tr>
                <td><p>URL Gambar</p></td>
                <td><input type="text" type="text" name="url" id="image" class="imgurl"></td>
            </tr>
            <tr>
                <td><p>Stok Barang</p></td>
                <td><input type="text" name="stok" id="stokbrng" class="stok"></td>
            </tr>
            <tr>
                <td><p>Tanggal Pesan</p></td>
                <td><input type="date" name="tanggal" id="tglpesan" class="tgl"></td>
            </tr>
            <tr>
                <td><button style="background-color: grey ;" name="btnsimpan" type="submit">Simpan</td>
            </tr>
        </table>
        </form>
        </div>

        <?php
        $tampil = include('table_output.php');
        echo $tampil;?>
        

</body>
</html>