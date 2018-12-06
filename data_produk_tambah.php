
<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

<form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="id_prdk" placeholder="NO">
        </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">NAMA PRODUK</label>
          <div class="col-sm-10">
           <input name="nama_prdk"  placeholder="Nama Produk"  type="text" class="form-control">    
        </div>
      </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">UNGGAH GAMBAR</label>
          <div class="col-sm-10">
            <input type="file" name="gambar">
                        
        </div>
       </div>         

<div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">DESKRIPSI</label>
          <div class="col-sm-10">
            <textarea name="ket_prdk" placeholder="Deskripsi"  type="text" class="form-control" cols="25" rows="10"></textarea>
           
        </div>
      </div>
      <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">HARGA</label>
          <div class="col-sm-10">
           <input name="harga_prdk"  placeholder="Rp."  type="text" class="form-control">    
        </div>
      </div>
        

    </p>
      <hr/>
  <button class="btn btn-primary" type="submit" name="kirim">Tambahkan</button>

    <?php 
    if (isset($_POST['kirim'])) {
      $nama_prdk = $_POST['nama_prdk'];
      $nama_file = $_FILES['gambar']['name'];
      $source = $_FILES['gambar']['tmp_name'];
      $folder = './produk/';
      $ket_prdk = $_POST['ket_prdk'];
$harga_prdk = $_POST['harga_prdk'];


      move_uploaded_file($source, $folder.$nama_file);
      $sisipkan = mysqli_query($connection, "INSERT INTO
        tb_produk VALUES (null,
      '$nama_prdk',
      '$nama_file',
      '$ket_prdk',
      '$harga_prdk'
      )");

      if ($sisipkan) {
        echo 'Brhasil';
      }else{
        echo 'gagal';
      }
    }
    ?>
          </div>
  </form>


    </div>
  </div>
</div>