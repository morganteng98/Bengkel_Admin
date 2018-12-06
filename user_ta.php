<?php
  if(isset($_POST['buttoninsert'])){
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if ($id_user=="" || $nama=="" || $alamat=="" || $username=="" || $password=="" | $level=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan data buku <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO user (id_user,nama,alamat,username,password,level) VALUES('$id_user','$nama','$alamat',$username,'$password','$level');";
  
     if(mysqli_query($connection,$queryinsert)){
          
?>
    <div class="alert alert-primary" role="alert">
      Data servis berhasil ditambahkan
    </div>
    
  <?php
      }else{   
        echo "data tidak berhasil ditambahkan";
        }
      }
    }
  ?>

