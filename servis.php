<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Servis</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">         
            DATA JASA SERVIS</h1></div>

<button type="button" class="btn btn-outline-primary " 
            data-toggle="modal" data-target="#modaltambah" >
             <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambah Data

           </button><p>

                <meta http-equiv="refresh" content="url=servis.php"/>
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
          
  <?php 
    include "servis_tambah.php";?>

    <div class="Konten">
      <?php
              $queryselect = "SELECT * FROM tb_servis";
              $resultselect = mysqli_query($connection,$queryselect);
              $no=0
            ?>

        <style>
        th{
          background-color: black;
          color:white;
          text-align: center;
                }
              </style>

            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th scope="col">KODE</th>
                  <th scope="col">NAMA JASA</th>
                  <th scope="col">KETERANGAN</th>
                  <th scope="col">HARGA</th>
                  <th scope="col">JENIS JASA</th>
                  <th scope="col" colspan="2">AKSI</th>

                </tr>
              </thead>
              <tbody>
  <?php
  while ($row=mysqli_fetch_array($resultselect)) {
  $no++;
  ?>
    <tr>
      <td><?=$no ?></td>
      
      <td><?php echo $row['nama_jasa']; ?></td>
      <td><?php echo $row['keterangan']; ?></td>
      <td><?php echo $row['harga_jasa']; ?></td>
      <td><?php echo $row['jasa']; ?></td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_servis']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_servis']; ?>">Hapus</button></td>
  <?php
  include("servis_update.php");
  include("servis_hapus.php");
}
  ?>
  </tbody>
</table>

          </div>
  
  <!-- Bootstrap inti dari JavaScript
  ================================================== --> 
  <!-- Posisi Jquery diakhir dokumen agar load halaman lebih cepat -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>

</html>