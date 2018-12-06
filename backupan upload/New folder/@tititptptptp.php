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
       <meta http-equiv="refresh" content="0;url=data_produk.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php

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
              <input type="hidden" value="<?php  echo $rowselectedit['file'];?>">
              <input type="file" class="form-control" name="gambar" placeholder="file" value="<?php echo $rowselectedit['file'];?>">

              <img src="produk/<?php echo $row['file'] ?>" height="100px" width="100px">
              <input type="submit" name="update" value="update">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">file</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="ket_prdk" placeholder="" value="<?php echo $rowselectedit['ket_prdk'];?>">

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
        <!-- <button type="submit" name="buttonubah" class="btn btn-primary">Ubah</button> -->
      </div>
    

    <?php 
    if (isset($_POST['update'])) {
      $nama_prdk = $_POST['nama_prdk'];
      $nama_file = $_FILES['gambar']['name'];
      $source = $_FILES['gambar']['tmp_name'];
      $folder = './produk/';
$ket_prdk = $_POST['ket_prdk'];
$harga_prdk = $_POST['harga_prdk'];

if ($nama_file != '') {
        move_uploaded_file($source, $folder.$nama_file);
        $update = mysqli_query($connection,"UPDATE tb_produk SET 
          nama_prdk = '".$nama_prdk."',
          file = '".$nama_file."',
          ");
}else{
   echo "gmbr tdk updat";
}
} ?>



    </form>
    </div>
  </div>
</div>