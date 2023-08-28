<?= $this->extend('layouts/admin'); ?>

<?= $this->section('content'); ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Buku</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<a href="<?= base_url('admin/buku') ?>" class="btn btn-primary mb-3">
    <i class="fas fa-arrow-left"></i> Kembali
</a>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <?= form_open_multipart('admin/buku') ?>
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">tahun</label>
                    <select name="tahun" class="form-control">
                        <option value="">Pilih Tahun</option>
                        <?php
                        for ($i = date('Y'); $i > 1900; $i--) : ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php endfor ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="number" class="form-control" id="isbn" name="isbn">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>

                <div class="d-flex mb-3 justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- /.container-fluid -->
<?= $this->endSection(); ?>