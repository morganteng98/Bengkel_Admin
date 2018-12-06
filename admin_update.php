  <?php
        if(isset($_POST['buttonubah'])){
          $id_user = $_POST['id_user'];
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];
          $username = $_POST['username'];
          $password = $_POST['password'];

        $queryupdate = "UPDATE user SET nama='$nama',alamat='$alamat',username='$username',password='$password' WHERE id_user='$id_user';";
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_user'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH DATA ADMIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_user'];
      $queryselectedit = "SELECT * FROM user WHERE id_user=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_user" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">NAma passworda</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['nama'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo $rowselectedit['alamat'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">Harga password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $rowselectedit['username'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="password" placeholder="TAHUN TERBIT" value="<?php echo $rowselectedit['password'];?>">
            </div>
          </div>


           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="level" placeholder="TAHUN TERBIT" value="<?php echo $rowselectedit['level'];?>">
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