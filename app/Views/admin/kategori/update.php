<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Update Kategori Buku</h1>

<a href="<?= base_url('admin/kategori') ?>" class="btn btn-primary mb-3">
    <i class="fas fa-arrow-left"></i> Kembali
</a>
<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?= base_url('admin/kategori/') . $data->id_kategori ?>" method="post">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="<?= $data->nama_kategori ?>">
                    </div>
                    <div class="d-flex mb-3 justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>