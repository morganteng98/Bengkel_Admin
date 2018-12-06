  <?php
        if(isset($_POST['buttonubah'])){
          $id_plg = $_POST['id_plg'];
          $nama_plg = $_POST['nama_plg'];
          $nama_pengguna = $_POST['nama_pengguna'];
          $kata_sandi = $_POST['kata_sandi'];
          $email_plg = $_POST['email_plg'];
          $notelp_plg = $_POST['notelp_plg'];
          $alamat_plg = $_POST['alamat_plg'];
          $jk_plg = $_POST['jk_plg'];

        $queryupdate = "UPDATE tb_pelanggan SET nama_plg='$nama_plg',nama_pengguna='$nama_pengguna',kata_sandi='$kata_sandi',email_plg='$email_plg',notelp_plg='$notelp_plg',alamat_plg='$alamat_plg',jk_plg='$jk_plg' WHERE id_plg='$id_plg';";
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_plg'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH DATA SERVIS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_plg'];
      $queryselectedit = "SELECT * FROM tb_pelanggan WHERE id_plg=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_plg" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama_plg" class="col-sm-4 col-form-label">NAMA PELANGGAN</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_plg" placeholder="Nama Pelanggan" value="<?php echo $rowselectedit['nama_plg'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA PENGGUNA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_pengguna" placeholder="Nama Pengguna" value="<?php echo $rowselectedit['nama_pengguna'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">KATA SANDI</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kata_sandi" placeholder="KATA SANDI" value="<?php echo $rowselectedit['kata_sandi'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">EMAIL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email_plg" placeholder="EMAIL" value="<?php echo $rowselectedit['email_plg'];?>">
            </div>
          </div>


           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">NO TELEPON</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="notelp_plg" placeholder="NO TELEPON" value="<?php echo $rowselectedit['notelp_plg'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="alamat_plg" placeholder="ALAMAT" value="<?php echo $rowselectedit['alamat_plg'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">JENIS KELAMIN</label>
            <div class="col-sm-10">
                <select type="text" class="form-control" name="jk_plg" placeholder="JENIS KELAMIN" value="<?php echo $rowselectedit['jk_plg'];?>">>
                  <option value="Belum Dipilih">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Permempuan">Permempuan</option>
              </select>
            
            
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