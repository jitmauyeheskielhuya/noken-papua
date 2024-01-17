<?= $this->extend('template/layout_home'); ?>

<?= $this->Section('page-content'); ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <h4 class="text-emerald-400 pb-3">Laporan Transaksi</h4>
    <div class="row pt-4 pb-4 rounded-md bg-slate-200">
      <div class="col">
        <p class="text-lg font-bold">Tabel Transaksi Produk</p>
        <table class="w-full border border-slate-900 text-center datatable table table-stripped">
          <thead>
            <tr class="bg-emerald-200 text-center">
              <th class="py-2 px-3 border-b">No</th>
              <th class="py-2 px-3 border-b">Nama Depan</th>
              <th class="py-2 px-3 border-b">Nama Belakang</th>
              <th class="py-2 px-3 border-b">Email</th>
              <th class="py-2 px-3 border-b">Ponsel</th>
              <th class="py-2 px-3 border-b">Alamat</th>
              <th class="py-2 px-3 border-b">Produk</th>
              <th class="py-2 px-3 border-b">Nominal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pemesanan as $key => $value) : ?>
              <tr class="bg-emerald-100">
                <td class="py-3 px-4 border-b"><?= $key + 1 ?></td>
                <td class="py-3 px-4 border-b"><?= $value['nama_depan'] ?></td>
                <td class="py-3 px-4 border-b"><?= $value['nama_belakang'] ?></td>
                <td class="py-3 px-4 border-b"><?= $value['email'] ?></td>
                <td class="py-3 px-4 border-b"><?= $value['no_hp'] ?></td>
                <td class="py-3 px-4 border-b"><?= $value['alamat'] ?></td>
                <td class="py-3 px-4 border-b">
                  <table>
                    <?php foreach ($value['keranjang'] as $keranjang) : ?>
                      <tr>
                        <td><?= $keranjang['qty'] ?></td>
                        <td><img src="/gambar_noken/<?= $keranjang['gambar_noken'] ?>" alt="gambar_noken"></td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </td>
                <td class="py-3 px-4 border-b"><?= $value['total_harga'] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <footer class="bg-slate-400 mt-96 rounded-t-md">
    <p class="text-emerald-600">Copyright © <?= date('Y'); ?> Yeheskiel Jitmau</p>
  </footer>
</div>
<?= $this->endSection(); ?>