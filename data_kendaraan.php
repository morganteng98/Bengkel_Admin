<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Bengkol</title>
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom style-->
    <link href="style.css" rel="stylesheet">
  </head>

<body>
<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Kendaraan</h1>
            </div>
  <!-- Isikan konten disini -->


<button type="button" class="btn btn-outline-primary " 
            data-toggle="modal" data-target="#modaltambah" >
             <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambahkan Data
           </button><p>
            <hr>
                <meta http-equiv="refresh" content="url=index.php"/>
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
          
  <?php 
 include "data_kendaraan_tambah.php";
  ?>

          <div class="Konten">
            <?php
              $queryselect = "SELECT * FROM tb_kendaraan";
              $resultselect = mysqli_query($connection,$queryselect);
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
                  <th scope="col">NO POLISI</th>
                  <th scope="col">NAMA KENDARAAN</th>
                  <th scope="col">JENIS KENDARAAN</th>
                  <th scope="col">MERK KENDARAAN</th>
                  <th scope="col">NAMA PELANGGAN</th>
                  <th scope="col" colspan="2">AKSI</th>

                </tr>
              </thead>
                       
              <tbody>
<?php
  while ($row=mysqli_fetch_array($resultselect)) {
  ?>
    <tr>
      <td scope="row"><?php echo $row['no_polisi']; ?></td>
      <td><?php echo $row['nama_knd']; ?></td>
      <td><?php echo $row['jenis_knd']; ?></td>
      
      <td><?php echo $row['merk_knd']; ?></td>
      <td><?php echo $row['id_plg']; ?></td>

      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_plg']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_plg']; ?>">Hapus</button></td>
    </tr>
  <?php
  //include("jadwal_update.php");
  //include("jadwal_hapus.php");
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
</body>
</html>
