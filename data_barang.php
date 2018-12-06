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
            <h1 class="h2">DATA BARANG</h1>
            </div>

            <button type="button" class="btn btn-outline-primary " 
            data-toggle="modal" data-target="#modaltambah" >
             <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambahkan Data
            </button><p>
            <hr>
                <!-- <meta http-equiv="refresh" content="url=index.php"/>
                          Sebuah fungsi ketika direfresh tidak menambah
                           -->          
  <?php 
 include "data_barang_tambah.php";
  ?>

          <div class="Konten">
            <?php
              $queryselect = "SELECT * FROM tb_barang inner join tb_kategori ON tb_barang.kode_ktgr=tb_kategori.kode_ktgr";
             $no = 0;
       
        
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
                  <th scope="col">NO</th>
                  <!--<th scope="col">ID barang</th>-->
                  <th scope="col">NAMA BARANG</th>
                  <th scope="col">KETERANGAN</th>
                  <th scope="col">STOK</th>
                  <th scope="col">SATUANN</th>
                  <th scope="col">HARGA BELI</th>
                  <th scope="col">HARGA JUALL</th>
                  <th scope="col">KATEGORI</th>
                  
                  <th scope="col" colspan="2">AKSI</th>

                </tr>
              </thead>
                       
              <tbody>
<?php
  while ($row=mysqli_fetch_array($resultselect)) {
  $no++;
  ?>
    <tr>
      <td><?=$no?></td> 
      
      <td><?php echo $row['nama_brg']; ?></td>
      <td><?php echo $row['ket_brg']; ?></td>
      <td><?php echo $row['jumlah']; ?></td>
      <td><?php echo $row['satuan']; ?></td>
      <td><?php echo $row['harga_beli']; ?></td>
      <td><?php echo $row['harga_jual']; ?></td>
      <td><?php echo $row['nama_ktgr']; ?></td>
      
      
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_brg']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_brg']; ?>">Hapus</button></td>
    </tr>
  <?php
  include("data_barang_update.php");
  include("data_barang_hapus.php");
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
