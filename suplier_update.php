  <?php
        if(isset($_POST['buttonubah'])){
          $id_suplier = $_POST['id_suplier'];
          $nama_suplier = $_POST['nama_suplier'];
          $alamat_suplier = $_POST['alamat_suplier'];
          $notelp_suplier = $_POST['notelp_suplier'];
          

        $queryupdate = "UPDATE tb_suplier SET nama_suplier='$nama_suplier',alamat_suplier='$alamat_suplier',notelp_suplier='$notelp_suplier' WHERE id_suplier=$id_suplier;";
        
        ?>
       <meta http-equiv="refresh" content="0;url=data_suplier.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php
   
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_suplier'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT DATA SUPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_suplier'];
      $queryselectedit = "SELECT * FROM tb_suplier WHERE id_suplier=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>

        <form method="post">
      <div class="modal-body">
        <input type="hidden" name="id_suplier" value="<?php echo $id;?>">
  <div class="form-group row">
    <label for="nama_suplier" class="col-sm-4 col-form-label">NAMA SUPLIER</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_suplier" placeholder="NAMA SUPLIER" value="<?php echo $rowselectedit['nama_suplier'];?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="alamat_suplier" class="col-sm-4 col-form-label">NAMA BARANG</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat_suplier" placeholder="NAMA BARANG" value="<?php echo $rowselectedit['alamat_suplier'];?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="notelp_suplier" class="col-sm-4 col-form-label">NO TELEPON</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="notelp_suplier" placeholder="notelp_suplier" value="<?php echo $rowselectedit['notelp_suplier'];?>">
    </div>
  </div>
      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="buttonubah" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>