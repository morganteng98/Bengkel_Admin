<?php include "function/koneksi.php"; ?>
<!-- Menginclude file koneksi -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1, shrink-to-fit=no">
    <title>Admin Bengkol</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

  </head>

<body>
<?php include "navigasi.php";
      include "sidebar.php";?>
    
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      
        <h1 class="h2">SELAMAT DATANG DI <strong>BENGKOL</strong>!</h1>
            
            <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">
            <!--     <button class="btn btn-sm btn-primary">Share</button>
              <button class="btn btn-sm btn-primary">Export</button>
            --></div>

              
            </div>
          </div>


          <div class="KontenD">
          <h4>Selamat datang di administrasi bengkel
          anda bisa mengelola data barang, data tranksaksi, data master, manajement user, dan jadwal bengkel</h4>
          
          <button type="button" class="btn btn-outline-primary ">
             <img src="glyph-iconset-master/svg/si-glyph-wrench-screwdriver.svg" style="height: 25px;" />
            <a href="servis.php">Service</a>
           </button>
            
            <button type="button" class="btn btn-outline-primary ">
             <img src="glyph-iconset-master/svg/si-glyph-clock.svg" style="height: 25px;" /><a href="jadwal.php">Jadwal</a>

           </button>

              
          </div>
  <!-- Bootstrap inti dari JavaScript
  ================================================== --> 
  <!-- Posisi Jquery diakhir dokumen agar load halaman lebih cepat -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="Bootstrap/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript">
  $('index.php').ready(function(){
    $('.parent ul').hide();
    $('.parent').hover(function(){
      $(this).find('ul').slideDown(200);
    },function(){
      $(this).find('ul').slideUp(200);
    });
  });
</script>

</body>
</html>