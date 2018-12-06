  <?php
        if(isset($_POST['buttonubah'])){
          $id_mekanik = $_POST['id_mekanik'];
          $nama_mekanik = $_POST['nama_mekanik'];
          $no_telepon = $_POST['no_telepon'];


        $queryupdate = "UPDATE tb_mekanik SET nama_mekanik='$nama_mekanik',no_telepon='$no_telepon' WHERE id_mekanik=$id_mekanik;";

?>    <meta http-equiv="refresh" content="0;url=data_mekanik.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->
<?php
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_mekanik'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_mekanik'];
      $queryselectedit = "SELECT * FROM tb_mekanik WHERE id_mekanik=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_mekanik" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama_mekanik" class="col-sm-4 col-form-label">NAMA MEKANIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_mekanik" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['nama_mekanik'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">no_telepon</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="no_telepon" placeholder="no_telepon" value="<?php echo $rowselectedit['no_telepon'];?>">
            </div>
          </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="buttonubah" class="btn btn-primary">Ubah</button>
      </div>
    
    </form>
    </div>
  </div>
</div>