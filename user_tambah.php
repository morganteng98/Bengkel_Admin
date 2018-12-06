<?php
  if(isset($_POST['buttoninsert'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   
    if ($username=="" || $nama==""|| $alamat=="" ||$password=="" || $level=="" ) {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan jadwal <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO user (nama,alamat,username,password,level) VALUES('$nama','$alamat','$username','$password','$level');";
  
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Jadwal Berhasil ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA USER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NAMA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" placeholder="NAMA">
        </div>

         </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">ALAMAT</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" placeholder="ALAMAT">
        </div>


        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA PENGGUNA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="NAMA PENGGUNA">
        </div>

        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KATA SANDI</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="KATA SANDI"></div>
        </div>
         
         <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">LEVEL</label>
          <div class="col-sm-10">
           <select name="level"    type="text" class="form-control">
              <option>Pilih Level</option>
              <option value="Super Admin">Super Admin</option>
              <option value="Admin">Admin</option>
            </select></div>
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