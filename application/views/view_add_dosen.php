<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tambah Data Dosen</title>
</head>
<body class="bg-secondary">
    <div class="container mt-5">
        <h2 class="fw-bold text-center text-white">Tambah Data Dosen</h2>
        <form action="<?php echo site_url('home/save_data_dosen'); ?>" method="post" class="p-3 mt-3 mx-auto bg-light rounded" style="width:500px"">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">NIY</label>
                <input type="text" name="niy" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Bidang Ilmu</label>
                <input type="text" name="keahlian" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="text-center mt-2">
            <a href="<?php echo site_url('home'); ?>" class=" text-white ">Kembali</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>