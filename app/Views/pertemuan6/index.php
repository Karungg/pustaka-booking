<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex mt-5 justify-content-center">
        <div class="card w-50">
            <div class="card-header">
                Sepatu
            </div>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                    Isi data dengan benar
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <div class="card-body">
                <?php $validation = \Config\Services::validation(); ?>
                <form action="<?= site_url('pertemuan6/checkout') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control<?= $validation->hasError('nama') ?: ''  ?>" name="nama" id="nama" placeholder="Nama">
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">No Telepon</label>
                        <input type="number" class="form-control" name="telp" id="telp" placeholder="+62">
                        <div class="invalid-feedback">
                            Please enter a message in the textarea.
                        </div>
                    </div>
                    <label for="sepatu" class="form-label">Merk Sepatu</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="sepatu" name="sepatu" aria-label="input-group">
                            <option selected>Pilih...</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </div>
                    <label for="ukuran" class="form-label">Ukuran Sepatu</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="ukuran" name="ukuran" aria-label="input-group">
                            <?php for ($i = 32; $i <= 44; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="d-flex mb-3 justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>