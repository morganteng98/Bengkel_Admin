  <?php
        if(isset($_POST['buttonubah'])){
          $kode_ktgr = $_POST['kode_ktgr'];
          $nama_ktgr = $_POST['nama_ktgr'];
          


        $queryupdate = "UPDATE tb_kategori SET kode_ktgr='$kode_ktgr',nama_ktgr='$nama_ktgr' WHERE kode_ktgr=$kode_ktgr;";

        if(mysqli_query($connection,$queryupdate)){
?><meta http-equiv="refresh" content="0;url=data_kategori.php"/> <?php
          echo "";

        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
      
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['kode_ktgr'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT KATEGORI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['kode_ktgr'];
      $queryselectedit = "SELECT * FROM tb_kategori WHERE kode_ktgr=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="kode_ktgr" value="<?php echo $id;?>">
          

           <div class="form-group row" style="display: none">
            <label for="inputEmail3" class="col-sm-4 col-form-label">KODE KATEGORI</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_ktgr" placeholder="kode_ktgr" value="<?php echo $rowselectedit['kode_ktgr'];?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="nama_ktgr" class="col-sm-4 col-form-label">KARTEGORI BARANG</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_ktgr" placeholder="Nama Kategori" value="<?php echo $rowselectedit['nama_ktgr'];?>">
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