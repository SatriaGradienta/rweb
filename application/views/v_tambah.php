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
