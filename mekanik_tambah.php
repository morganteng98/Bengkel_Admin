<?php
  if(isset($_POST['buttoninsert'])){
    $id_mekanik = $_POST['id_mekanik'];
    $nama_mekanik = $_POST['nama_mekanik'];
    $no_telepon = $_POST['no_telepon'];
   
    if ($nama_mekanik=="" || $no_telepon=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan Mekanik <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_mekanik (nama_mekanik,no_telepon) VALUES('$nama_mekanik','$no_telepon');";
  
?>    <meta http-equiv="refresh" content="0;url=data_mekanik.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->
<?php
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Data Berhasil ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA MEKANIK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label">ID MEKANIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_mekanik" placeholder="ID MEKANIK">
          </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NAMA MEKANIK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_mekanik" placeholder="NAMA MEKANIK">
          </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NO TELEPON</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="no_telepon" placeholder="NOMOR TELEPON">
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