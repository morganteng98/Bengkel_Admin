<?php
  if(isset($_POST['buttoninsert'])){
    $kode_ktgr = $_POST['kode_ktgr'];
    $nama_ktgr = $_POST['nama_ktgr'];
    
   
    if ($nama_ktgr=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan kategori <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_kategori (kode_ktgr,nama_ktgr) VALUES('$kode_ktgr','$nama_ktgr');";
   ?>
       <meta http-equiv="refresh" content="0;url=data_kategori.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php
       
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      <b>Kategori Barang</b> Berhasil ditambahkan
    </div>
    
  <?php
      }else{   
        echo "data tidak berhasil ditambahkan";
        }
      }
    }
  ?>

<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label">kode</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="kode_ktgr" placeholder="NO">
        </div>

        </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA KATEGORI</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_ktgr" placeholder="Kategori Barang">
        </div>

        </div>
        
    </div>

      <!-- Footer modal -->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" name="buttoninsert" class="btn btn-outline-primary">Tambahkan</button>
        </div>
  </form>

    </div>
  </div>
</div>