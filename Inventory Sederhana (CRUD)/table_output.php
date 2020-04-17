<?php
    include("lib/koneksi.php");
    $query = $con->query("SELECT * FROM `barang`");
    $nomor = 1;
    if (isset($_GET['info'])) {
        # code...
        echo $_GET['info'];
    }
?>

<table border=1 cellpading="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Kode Produk</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Gambar Barang</th>
                <th>Stok</th>
                <th>Tanggal Pesan</th>
                <th>Modify</th>
            </tr>
            <?php foreach($query as $data) { ?>
                <tr>
                    <td><?=$nomor++; ?></td>
                    <td><?=$data['kd_barang']; ?></td>
                    <td><?=$data['nm_barang']; ?></td>
                    <td><?=$data['harga']; ?></td>
                    <td><?=$data['satuan']; ?></td>
                    <td><?=$data['kategori']; ?></td>
                    <td><img src="<?=$data['url']?>" width=100px></td>
                    <?php $stok = $data['stok']; echo ($data['stok'] < 5) ? "<td style='background:red; color:#fff'>$stok</td>" : "<td>$stok</td>"; ?>
                    <td><?=$data['tanggal']; ?></td>
                    <td><button style="background-color: red;"><a href="delete.php?key=<?php echo $data['kd_barang'];?>" style="text-decoration: none;color: white">Hapus</a></button>
                    <button style="background-color: yellow"><a href="proses_edit.php?kunci=<?php echo $data['kd_barang'];?>" style="text-decoration: none;color: black">edit</a></button>
                </tr>
            <?php } ?>
        </table>