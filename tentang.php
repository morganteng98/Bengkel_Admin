<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Bengkol</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

<body>
<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

        </div>
  <!-- Isikan konten disini -->

        <div class="Konten">
        
          <h1 style="text-align: center">Tentang Bengkel</h1>
        <hr> 
        </div>
                <meta http-equiv="refresh" content="url=index.php"/>
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
          
  <?php 
    //include "jadwal_tambah.php";
    /*Memanggil jadwal_tambah untuk menyisipkan atau menambah data*/
  ?>

          <div class="Konten">
            <?php
              $queryselect = "SELECT * FROM tentang";
              $resultselect = mysqli_query($connection,$queryselect);
            ?>


              <style>
                th{
                  background-color: black;
                  color:white;
                  text-align: center;
                }
                tr{
                  text-align: center;
                }
              </style>

            <table align="center">
              <tbody>
     
<?php
  while ($row=mysqli_fetch_array($resultselect)) {
  ?>
    <tr>
      
      <td><h4><?php echo $row['nama_bengkel']; ?></h4></td>
           
    </tr>
    <tr>
      <td style="color: blue"><?php echo $row['nama_pemilimk']; ?></td>
    </tr> <tr>
      <td><?php echo $row['deskripsi']; ?></td>
    </tr>
   <tr>
      <td><p>CP: &nbsp;<?php echo $row['no_telepon']; ?></p></td>

    </tr>
  
  <?php

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