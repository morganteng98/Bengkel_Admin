<?php
  if(isset($_POST['buttoninsert'])){
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
   
    if ($nama=="" || $alamat=="" $username=="" || $password=="" || $level=="" ||) {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan data <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO user (id_user,nama,alamat,username,,passsword,level) VALUES('$id_user','$nama','$alamat','$username','$password','$level');";
  ?>
       <meta http-equiv="refresh" content="0;url=manajemen_user.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Data Admin Berhasil ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA ADMIN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">No</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_user" placeholder="NO">
        </div>

        </div>

      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA</label>
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
          <label for="inputEmail3" class="col-sm-4 col-form-label">USERNAME</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="USERNAME">
        </div>
        </div>


  
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">PASSWORD</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="password" placeholder="PASSWORD">
        </div>
        </div>


         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">LEVEL</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="level" placeholder="LEVEL">
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