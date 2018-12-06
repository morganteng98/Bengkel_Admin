<?php
  if(isset($_POST['buttoninsert'])){
    $id_suplier = $_POST['id_suplier'];
    $nama_suplier = $_POST['nama_suplier'];
    $alamat_suplier = $_POST['alamat_suplier'];
    $notelp_suplier = $_POST['notelp_suplier'];
    
      
    if ($nama_suplier=="" || $alamat_suplier=="" || $notelp_suplier=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan Suplier <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_suplier (id_suplier,nama_suplier,alamat_suplier,notelp_suplier) VALUES('$id_suplier','$nama_suplier','$alamat_suplier','$notelp_suplier');";
  ?>
       <meta http-equiv="refresh" content="0;url=data_suplier.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php
   
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Suplier Berhasil ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA SUPLIER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label" >ID SUPLIER</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_suplier" placeholder="ID SUPLIER">
        </div>
        </div>
</div>
       <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NAMA SUPLIER</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_suplier" placeholder="NAMA SUPLIER">
        </div>
        </div>
</div>
         <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">ALAMAT SUPLIER</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat_suplier" placeholder="ALAMAT SUPPLIER">
        </div>
        </div>
      </div>
        <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NO TELEPONE</label>
          <div class="col-sm-10">
            <input type="varchar" class="form-control" name="notelp_suplier" placeholder="NO TELEPONE">
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