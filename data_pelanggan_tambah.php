<?php
  if(isset($_POST['buttoninsert'])){
    $id_plg = $_POST['id_plg'];
    $nama_plg = $_POST['nama_plg'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $kata_sandi = $_POST['kata_sandi'];
    $email_plg = $_POST['email_plg'];
    $notelp_plg = $_POST['notelp_plg'];
    $alamat_plg = $_POST['alamat_plg'];
    $jk_plg = $_POST['jk_plg'];
    
    if ($nama_plg=="" || $nama_pengguna=="" || $kata_sandi=="" || $email_plg=="" || $notelp_plg=="" || $alamat_plg=="" || $jk_plg=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan jadwal <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_pelanggan (id_plg,nama_plg,nama_pengguna,kata_sandi,email_plg,notelp_plg,alamat_plg,jk_plg) VALUES('$id_plg','$nama_plg','$nama_pengguna','$kata_sandi','$email_plg','$notelp_plg','$alamat_plg','$jk_plg');";
  
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Pelanggan <strong>Berhasil</strong> ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PELANGGAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">

         <div class="form-group row" style="display: none">
          <label for="inputEmail3" class="col-sm-4 col-form-label">ID PELANGGAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_plg" placeholder="ID PELANGGAN">
        </div>
       </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA PELANGGAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_plg" placeholder="NAMA PELANGGAN">
        </div>
       </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA PENGGUNA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_pengguna" placeholder="NAMA PENGGUNA">
        </div>
       </div>
        

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">ALAMAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat_plg" placeholder="ALAMAT">
        </div>
        </div>
         
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KATA SANDI</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="kata_sandi" placeholder="KATA SANDI">
        </div>

        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NO TELEPON</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="notelp_plg" placeholder="NO TELEPON">
        </div>
        </div>


 <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">EMAIL</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email_plg" placeholder="EMAIL">
        </div>
        </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">JENIS KELAMIN</label>
          <div class="col-sm-10">
              <select type="text" class="form-control" name="jk_plg" placeholder="JENIS KELAMIN">
                  <option value="Belum Dipilih">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Permempuan">Permempuan</option>
              </select>
            
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