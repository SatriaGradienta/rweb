<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register Pasien</title>

  <!-- Custom fonts for this template-->
  <link href="assets/assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="assets/assets2/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/assets2/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">REGISTER PASIEN</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>
    
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data pasien</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="v_tambah.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Tambah Pasien</span></a>
      </li>
    </ul>



    <div id="content-wrapper">

      <div class="container-fluid">



      </div>

      <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <!-- this for navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
    <a class="navbar-brand" href="javascript:void(0)">RS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="colapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
        <li class="navbar-item">
          <a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('nama')?></a>
          </li>
        </ul>
        <form class ="form-inline my-2 my-lg-0">
          <a href="<?php echo site_url('login')?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a>
        </form>
      </div>
    </nav>
    <!-- this for navbar -->


<div class="container">
  <h2><?php echo $judul ?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Golongan Darah</th>
        <th>Status Perkawinan</th>
        <th>No HP</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
    	<?php $no = 0; ?>
    	<?php foreach($data_pasien as $data):?>
    	<?php $no++; ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data->nik ?></td>
        <td><?php echo $data->nama ?></td>
        <td><?php echo $data->tempat_lahir ?></td>
        <td><?php echo $data->jenis_kelamin ?></td>
        <td><?php echo $data->golongan_darah ?></td>
        <td><?php echo $data->status_perkawinan ?></td>
        <td><?php echo $data->no_hp ?></td>
        <td><?php echo $data->alamat ?></td>
      </tr>
  		<?php endforeach ?>
    </tbody>
  </table>

  <!-- <h2><?php echo "Pasien" ?></h2>
  <table class="table table-striped">
    <thead>
      <tr>
      <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Golongan Darah</th>
        <th>Status Perkawinan</th>
        <th>No HP</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
    	<?php $no = 0; ?>
    	<?php foreach($data_pasien as $data):?>
    	<?php $no++; ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data->nik ?></td>
        <td><?php echo $data->nama ?></td>
        <td><?php echo $data->tempat_lahir ?></td>
        <td><?php echo $data->jenis_kelamin ?></td>
        <td><?php echo $data->golongan_darah ?></td>
        <td><?php echo $data->status_perkawinan ?></td>
        <td><?php echo $data->no_hp ?></td>
        <td><?php echo $data->alamat ?></td>
      </tr>
  		<?php endforeach ?>
    </tbody>
  </table> -->

</div>

</body>
</html>
