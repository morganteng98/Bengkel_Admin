  <?php
        if(isset($_POST['buttonubah'])){
          $id_prdk = $_POST['id_prdk'];
          $nama_prdk = $_POST['nama_prdk'];
          $ket_prdk = $_POST['ket_prdk'];
          $file = $_POST['file'];
          $harga_prdk = $_POST['harga_prdk'];

        $queryupdate = "UPDATE tb_produk SET nama_prdk='$nama_prdk',ket_prdk='$ket_prdk',harga_prdk='$harga_prdk',file='$file' WHERE id_prdk=$id_prdk;";

?>    <meta http-equiv="refresh" content="0;url=data_produk.php"/>
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
<div class="modal fade" id="modalubah<?php echo $row['id_prdk'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_prdk'];
      $queryselectedit = "SELECT * FROM tb_produk WHERE id_prdk=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_prdk" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama_prdk" class="col-sm-4 col-form-label">NAMA MEKANIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_prdk" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['nama_prdk'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">file</label>
            <div class="col-sm-10">

              <input type="file" class="form-control" name="file" placeholder="file" value="<?php echo $rowselectedit['file'];?>">


            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">file</label>
            <div class="col-sm-10">
              <textarea  type="text" class="form-control" name="ket_prdk" placeholder="s"><?php echo $rowselectedit['ket_prdk'];?></textarea>

            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">file</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga_prdk" placeholder="" value="<?php echo $rowselectedit['harga_prdk'];?>">

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