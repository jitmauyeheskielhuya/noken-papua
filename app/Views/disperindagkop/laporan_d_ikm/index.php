<?= $this->extend('template/layout_home'); ?>

<?= $this->Section('page-content'); ?>
<div class="page-wrapper">
  <div class="content container-fluid">
    <h4 class="text-emerald-400 pb-3">Laporan Data IKM</h4>
    <div class="row pt-4 pb-4 rounded-md bg-slate-200">
      <div class="col">
        <p class="text-lg font-bold">Tabel Laporan Data IKM</p>
        <table class="w-full border border-slate-900 mt-4 text-center datatable table table-stripped">
          <thead>
            <tr class="bg-emerald-200">
              <th class="py-2 px-4 border-b">No</th>
              <th class="py-2 px-4 border-b">Email</th>
              <th class="py-2 px-4 border-b">Username</th>
              <th class="py-2 px-4 border-b">Role/Group</th>
              <!-- <th class="py-2 px-4 border-b">Aksi</th> -->
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($result as $value) : ?>
              <tr class="bg-emerald-100">
                <td class="py-3 px-4 border-b"><?= $no++; ?></td>
                <td class="py-3 px-4 border-b"><?= $value['email']; ?></td>
                <td class="py-3 px-4 border-b"><?= $value['username']; ?></td>
                <td class="py-3 px-4 border-b"><?= $value['group_name']; ?></td>
                <!-- <td class="py-3 px-4 border-b">
                  <a href="" class="bg-emerald-600 hover:bg-emerald-500 rounded p-2 text-white"><i class="fa fa-eye"></i></a>
                </td> -->
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