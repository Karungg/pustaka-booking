<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<h1 class="h3 mb-3 text-gray-800">Kategori Buku</h1>
<a class="btn btn-primary mb-3" href="<?= base_url('admin/kategori-buku/add') ?>"><i class="fa fa-plus"></i> Tambah Kategori</a>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sains</td>
                                <td>Edinburgh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
<?= $this->endSection(); ?>