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
            <h1 class="h2">Kelola Toko</h1>

 <div class="btn-toolbar mb-2 mb-md-0">

              <div class="btn-group mr-2">
                
                <a href="beli_barang.php" class="btn btn-sm btn-outline-secondary">Beli Barang</a>
                <a href="jual_barang.php" class="btn btn-sm btn-outline-secondary">Jual Barang</a>

              </div>

            </div>
          
          </div>
              <button class="btn btn-sm btn-outline-secondary btn-block active"> 
                upload Barang
              </button>

          <div class="Konten">
          <p>
            Tabel atau card nanti yang akan muncul di admin dan pelanggan berisi data harga upload foto dari modal input barang
          </p>
          </div>
  <!-- Bootstrap inti dari JavaScript
  ================================================== --> 
  <!-- Posisi Jquery diakhir dokumen agar load halaman lebih cepat -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>