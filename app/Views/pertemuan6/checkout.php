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
                Data Pelanggan
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Merk Sepatu</th>
                            <th scope="col">Ukuran</th>
                            <th scope="col">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['telp'] ?></td>
                            <td><?= $data['sepatu'] ?></td>
                            <td><?= $data['ukuran'] ?></td>
                            <td><?= $data['harga'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex mb-3 justify-content-end">
                    <a href="<?= site_url('/pertemuan6') ?>" class="btn btn-primary">Kembali</a>
                </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>