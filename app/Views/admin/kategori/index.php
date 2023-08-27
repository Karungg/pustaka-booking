<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Kategori Buku</h1>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahModal">
    <i class="fas fa-plus"></i> Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="TambahModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Buku</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kategori') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>

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
                        <thead class="text-center">
                            <tr>
                                <th style="width: 5%;">No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kategori as $key => $value) :
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $value['nama_kategori'] ?></td>
                                    <td class="text-center" style="width: 20%;">
                                        <a href="<?= base_url('admin/kategori/') . $value['id_kategori'] . '/edit' ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ubah</a>
                                        <form class="d-inline" action="<?= base_url('admin/kategori/') . $value['id_kategori'] ?>" method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus kategori <?= $value['nama_kategori'] ?>?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
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