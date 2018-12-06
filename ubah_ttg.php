  <?php
        if(isset($_POST['ubah'])){
          $id_ttg = $_POST['id_ttg'];
          $nama_bengkel = $_POST['nama_bengkel'];
          $nama_pemilimk = $_POST['nama_pemilimk'];
          $deskripsi = $_POST['deskripsi'];
          $no_telepon = $_POST['no_telepon'];
          

        $queryupdate = "UPDATE tentang SET nama_bengkel='$nama_bengkel',nama_pemilimk='$nama_pemilimk',deskripsi='$deskripsi',no_telepon='$no_telepon' WHERE id_ttg=$id_ttg;";
        
        ?>
       <meta http-equiv="refresh" content="0;url=tentang.php">
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
      <?php
      $id=$row['id_ttg'];
      $queryselectedit = "SELECT * FROM tentang WHERE id_ttg=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>

        <form method="post">
      <div class="modal-body">
        <input type="hidden" name="id_ttg" value="<?php echo $id;?>">
  <div class="form-group row">
    <label for="nama_bengkel" class="col-sm-4 col-form-label">NAMA SUPLIER</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_bengkel" placeholder="NAMA SUPLIER" value="<?php echo $rowselectedit['nama_bengkel'];?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="nama_pemilimk" class="col-sm-4 col-form-label">NAMA BARANG</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_pemilimk" placeholder="NAMA BARANG" value="<?php echo $rowselectedit['nama_pemilimk'];?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="deskripsi" class="col-sm-4 col-form-label">NO TELEPON</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi" value="<?php echo $rowselectedit['deskripsi'];?>">
    </div>
  </div>
      
<div class="form-group row">
    <label for="deskripsi" class="col-sm-4 col-form-label">NO TELEPON</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="deskripsi" placeholder="deskripsi" value="<?php echo $rowselectedit['no_telepon'];?>">
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