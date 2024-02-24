<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <style>
    .td {
      text-align: center;
    }
  </style>


  <!-- countent -->


  <center>
    <img src="1.png" alt="">
    <div class="mt-5">
      <h3>PENGGAJIHAN<br>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
    </div>
  </center>

  <center>
  <div class="card mt-5 ml-5 mr-5 text-light bg-info text-left" style="max-width: 50rem;">
  <div class="card-header">
    Data Penggajihan
  </div>
  <div class="card-body text-light bg-info">
  <form method="post" action="">
  <div class="form-group text-left">
    <label for="inputAddress">No</label>
    <input type="text" class="form-control" name="noo" id="inputAddress" placeholder="No">
  </div>
  <div class="form-group text-left">
    <label for="inputAddress">Nama</label>
    <input type="text" class="form-control" name="nama" id="inputAddress" placeholder="Nama">
  </div>
  <div class="form-group text-left">
    <label for="">Unit Pendidikan</label><br>
    <select name="unit" id="" class="form-control">
        <option selected disabled align="center" value="unit"></option>
        <option value="" selected disabled>Pilih Unit Pendididkan</option>
        <option value="tk">TK</option>
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="sma">SMA</option>
        <option value="smk">SMK</option>
    </select>
  </div>
  <div class="form-group text-left">
    <label for="inputAddress">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tanggal" id="inputAddress">
  </div>
  <div class="row mt-4 text-left">
    <div class="col">
        <h3 class="font-italic">Gaji</h3>
    </div>
    <div class="col text-left">
        <h3 class="font-italic">Potongan</h3>
    </div>
  </div>
  <div class="form-row mt-4 text-left">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Jabatan</label>
      <select name="jabatan" id="" class="form-control">
        <option selected disabled align="center" value="Agama"></option>
        <option value="" selected disabled>Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
    </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">BPJS</label>
      <input type="number" class="form-control" id="inputPassword4" name="bpjs" placeholder="BPJS">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Lama Keja</label>
      <input type="number" class="form-control" id="inputEmail4" name="lama" placeholder="Lama Kerja">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Pinjaman</label>
      <input type="number" class="form-control" id="inputPassword4" name="pinjaman" placeholder="Pinjaman">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputEmail4">Jabatan</label>
      <select name="status" id="" class="form-control">
        <option selected disabled align="center" value="Agama"></option>
        <option value="" selected disabled>Pilih Status</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option>
    </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Tabungan</label>
      <input type="number" class="form-control" id="inputPassword4" name="tabungan" placeholder="Tabungan">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" style=" margin-left: 385px;">
      <label for="inputAddress">Lainya</label>
      <input type="number" class="form-control" id="inputAddress" name="lainnya" placeholder="Lainya">
    </div>
  </div>
  <button type="submit" class="btn btn-primary bg-dark" name="daftar">Sign in</button>
</form>
  </div>
</div>
</center>

 <!-- awal countent -->
    







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

if(isset($_POST{'daftar'})){

  $noo = $_POST['noo'];
  $nama = $_POST['nama'];
  $unit = $_POST['unit'];
  $tanggal = $_POST['tanggal'];
  $jabatan = $_POST['jabatan'];
  $lama = $_POST['lama'];
  $status = $_POST['status'];
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $tabungan = $_POST['tabungan'];
  $lainnya = $_POST['lainnya'];
  $gaji = 0;
  $bonus = 0;
  $bersih = 0;

  if ($jabatan == "Kepala Sekolah"){
    $gaji += 5000000;
} else if ($jabatan == "Wakasek"){
    $gaji += 4000000;
} else if ($jabatan == "Guru"){
    $gaji += 3000000;
} else if ($jabatan == "Karyawan"){
    $gaji += 2000000;
} else "Pilih Jabatan Terlebih Dahulu ";

if ($status == "Tetap"){
  $bonus += 1000000;
}

$bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;


  class hasil{
    public function pendaftaran($noo2,$nama2,$unit2,$tanggal2,$jabatan2,$gaji2,$lama2,$status2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$bersih2){

?>

<center>
<div class="card border-info mb-3 mt-5" style="max-width: 35rem;">
  <div class="card-header bg-info text-light"><h3><b>Hasil Pendaftaran</b></h3></div>
  <div class="card-body text-info">
    <h5 class="card-title">pendaftaran Sukses</h5>
    <div class="text-left" style="max-width: 30rem;">
    <table>
      <tr>
        <td>No </td>
        <td > : </td>
        <td><?php echo $noo2 ?></td>
      </tr>
      <tr>
        <td>Nama </td>
        <td> : </td>
        <td><?php echo $nama2 ?></td>
      </tr>
      <tr>
        <td>Unit Pendidikan </td>
        <td> : </td>
        <td><?php echo $unit2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Gaji </td>
        <td> : </td>
        <td><?php echo $tanggal2 ?></td>
      </tr>
      <tr>
        <td>Jabatan </td>
        <td> : </td>
        <td><?php echo $jabatan2 ?></td>
      </tr>
      <tr>
        <td>Gaji </td>
        <td> : </td>
        <td><?php echo $gaji2 ?></td>
      </tr>
      <tr>
        <td>Status Kerja </td>
        <td> : </td>
        <td><?php echo $status2 ?></td>
      </tr>
      <tr>
        <td>Bonus </td>
        <td> : </td>
        <td><?php echo $bonus2 ?></td>
      </tr>
      <tr>
        <td>BPJS </td>
        <td> : </td>
        <td><?php echo $bpjs2 ?></td>
      </tr>
      <tr>
        <td>Pinjaman </td>
        <td> : </td>
        <td><?php echo $pinjaman2 ?></td>
      </tr>
      <tr>
        <td>Tabungan </td>
        <td> : </td>
        <td><?php echo $tabungan2 ?></td>
      </tr>
      <tr>
        <td>Lainnya </td>
        <td> : </td>
        <td><?php echo $lainnya2 ?></td>
      </tr>
      <tr>
        <td>Gaji Bersih </td>
        <td> : </td>
        <td><?php echo $bersih2 ?></td>
      </tr>
    </table>
    </div>
  </div>
</div>
</center>

<?php
    }
}

$cetak = new hasil();
echo $cetak->pendaftaran($noo,$nama,$unit,$tanggal,$jabatan,$gaji,$lama,$status,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$bersih);

}

?>