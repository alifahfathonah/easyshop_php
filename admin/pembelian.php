<h2 class="text-center">Data Pembelian</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th> No. </th>
            <th> Nama Pelanggan</th>
            <th> Tanggal Pembelian </th>
            <th> Total </th>
            <th> Aksi </th>
        </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; ?>
       <?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pembelian = pelanggan.id_pelanggan"); ?>
       <?php while ($pecah = $ambil->fetch_assoc()) {?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_pelanggan']; ?></td>
            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
            <td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
            <td> <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-success">Detail</a> </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>