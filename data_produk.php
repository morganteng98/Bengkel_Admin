<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Data Servis</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">         
            DATA PRODUK</h1></div>

        <button type="button" class="btn btn-outline-primary " 
            data-toggle="modal" data-target="#modaltambah" >
             <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambah Data

           </button><p>

          
  <?php 
    include "data_produk_tambah.php";?>

    <div class="Konten">
      <?php
              $queryselect = "SELECT * FROM tb_produk";
              $resultselect = mysqli_query($connection,$queryselect);
              $no=0;
            ?>
         
     
        <style>
        th{
          background-color: black;
          color:white;
          text-align: left;
          width: 200px;
                }
              </style>
<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th scope="col">NO</th>
                  <!-- <th scope="col">ID BARANG</th> -->
                  <th scope="col">NAMA BARANG</th>
                  <th scope="col">HARGA</th>
                  <th scope="col">DESKRIPSI</th>
                  <th scope="col">HARGA</th>
                  <th scope="col" colspan="2" style="text-align: center;">AKSI</th>

                </tr>
              </thead>
              <tbody>
  <?php
  while ($row=mysqli_fetch_array($resultselect)) {
  $no++;
  ?>
    <tr>
      <td><?=$no ?></td>
      
       <!-- id produk du hidden --> 
      <td><?php echo $row['nama_prdk']; ?></td>
      <td><img src="produk/<?php echo $row['file'] ?>" height="100px" width="100px"></td>
      <td><?php echo $row['ket_prdk']; ?></td>
            <td>Rp.<?php echo $row['harga_prdk']; ?></td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_prdk']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_prdk']; ?>">Hapus</button></td>
  <?php
  include("data_produk_update.php");
  include("data_produk_hapus.php");
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