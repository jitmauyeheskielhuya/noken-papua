<?= $this->extend('template/home'); ?>

<?= $this->Section('page-content'); ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <h4 class="text-emerald-400 pb-3">Halaman Pemesanan Produk</h4>
    <div class="row pt-4 pb-4 rounded-md bg-slate-200">
      <div class="col">
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
              <th class="py-2 px-3 border-b">status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pemesanan as $key => $value) :
              $id = $value['id_pembelian'];
              $token = base64_encode("SB-Mid-server-yzB1hCmarPWIlsMcXVV3gMjv:");
              $url = "https://api.sandbox.midtrans.com/v2/" . $id . "/status";
              $header = array(
                'Accept: application/json',
                'Authorization: Basic ' . $token,
                'Content-Type: application/json'
              );
              $method = 'GET';
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
              curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
              curl_setopt($ch, CURLOPT_POSTFIELDS, false);
              curl_setopt($ch, CURLINFO_HEADER_OUT, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              $result = curl_exec($ch);
              $hasil = json_decode($result, true);
            ?>
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
                        <td><img src="/gambar_noken/<?= $keranjang['gambar_noken'] ?>" alt="gambar noken"></td>
                      </tr>
                    <?php endforeach; ?>
                  </table>
                </td>
                <td class="py-3 px-4 border-b"><?= $value['total_harga_produk'] ?></td>
                <?php
                if (substr($hasil['status_code'], 0, 1) == "4") {
                  $status = "transaksi batal";
                } else {
                  if ($hasil['transaction_status'] == "settlement") {
                    $status = "transaksi berhasil";
                  } elseif ($hasil['transaction_status'] == "pending") {
                    $status = "menunggu transaksi";
                  }
                }
                ?>
                <td class="py-4 px-4 border-b"><?= $status; ?></td>
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