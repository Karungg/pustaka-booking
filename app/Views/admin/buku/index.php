<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Buku</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<a href="<?= base_url('admin/buku/new') ?>" class="btn btn-primary mb-3">
    <i class="fas fa-plus"></i> Tambah Buku
</a>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success') ?>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <?php endif ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('error') ?>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                <?php endif ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>ISBN</th>
                                <th>Stok</th>
                                <th>Dipinjam</th>
                                <th>Dibooking</th>
                                <th>Gambar</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data as $key => $value) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['judul_buku'] ?></td>
                                    <td><?= $value['pengarang'] ?></td>
                                    <td><?= $value['penerbit'] ?></td>
                                    <td><?= $value['tahun_terbit'] ?></td>
                                    <td><?= $value['isbn'] ?></td>
                                    <td><?= $value['stok'] ?></td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td><img src="<?= base_url('assets/images/') . $value['image'] ?>" alt="" class="img-fluid img-thumbnail"></td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="<?= base_url('admin/buku/') . $value['id'] . '/edit' ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                        <form class="d-inline" action="<?= base_url('admin/buku/') . $value['id'] ?>" method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus buku <?= $value['judul_buku'] ?>?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->
<?= $this->endSection(); ?>