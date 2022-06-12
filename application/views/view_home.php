<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rweb-8</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-secondary">

<div class="container my-5">
  <div class="d-flex justify-content-between">
  <h2 class="fw-bold text-white"><?php echo $judul1;?></h2>
  <a href="<?php echo site_url('Home/add_data_dosen')?>" type="button" class="btn btn-success" name="tambah">Tambah</a>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover bg-white text-center">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIY</th>
          <th>Bidang Ilmu</th>
          <th>Email</th>
          <th>Options</th>  
      </tr>
      </thead>
      <tbody>
          <?php $no=0;?>
          <?php foreach($data_dosen as $data):?>
          <?php $no++;?>
          <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $data->nama;?></td>
          <td><?php echo $data->niy;?></td>
          <td><?php echo $data->keahlian;?></td>
          <td><?php echo $data->email;?></td>
          <td class="d-flex justify-content-center">
            <a href="<?php echo site_url('Home/edit_dosen/'.$data->id);?>" type="button" class="btn btn-secondary mx-1">Edit</a>
            <a href="<?php echo site_url('Home/delete_dosen/'.$data->id);?>" type="button" class="btn btn-danger mx-1">Delete</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<div class="container px-3 my-5">
<div class="d-flex justify-content-between">
  <h2 class="fw-bold text-white"><?php echo $judul2;?></h2>
  <a href="<?php echo site_url('Home/add_data_mahasiswa')?>" type="button" class="btn btn-success" name="tambah">Tambah</a>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover bg-white text-center">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Semester</th>
          <th>Email</th>
          <th>Options</th>
      </tr>
      </thead>
      <tbody>
          <?php $no=0;?>
          <?php foreach($data_mahasiswa as $data):?>
          <?php $no++;?>
          <tr>
          <td><?php echo $no;?></td>
          <td><?php echo $data->nama;?></td>
          <td><?php echo $data->nim;?></td>
          <td><?php echo $data->semester;?></td>
          <td><?php echo $data->email;?></td>
          <td class="d-flex justify-content-center">
            <a href="<?php echo site_url('Home/edit_mahasiswa/'.$data->id);?>" type="button" class="btn btn-secondary mx-1">Edit</a>
            <a href="<?php echo site_url('Home/delete_mahasiswa/'.$data->id);?>" type="button" class="btn btn-danger mx-1">Delete</a>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
