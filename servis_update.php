  <?php
        if(isset($_POST['buttonubah'])){
          $id_servis = $_POST['id_servis'];
          $nama_jasa = $_POST['nama_jasa'];
          $keterangan = $_POST['keterangan'];
          $harga_jasa = $_POST['harga_jasa'];
          $jasa = $_POST['jasa'];

        $queryupdate = "UPDATE tb_servis SET nama_jasa='$nama_jasa',keterangan='$keterangan',harga_jasa='$harga_jasa',jasa='$jasa' WHERE id_servis='$id_servis';";

?>    <meta http-equiv="refresh" content="0;url=servis.php"/>
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
<div class="modal fade" id="modalubah<?php echo $row['id_servis'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH DATA SERVIS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_servis'];
      $queryselectedit = "SELECT * FROM tb_servis WHERE id_servis=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_servis" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama_jasa" class="col-sm-4 col-form-label">NAma jasaa</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_jasa" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['nama_jasa'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">keterangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="keterangan" placeholder="keterangan" value="<?php echo $rowselectedit['keterangan'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Harga Jasa</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga_jasa" placeholder="harga_jasa" value="<?php echo $rowselectedit['harga_jasa'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">JASA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jasa" placeholder="TAHUN TERBIT" value="<?php echo $rowselectedit['jasa'];?>">
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