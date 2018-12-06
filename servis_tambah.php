<?php
  if(isset($_POST['buttoninsert'])){
    $id_servis = $_POST['id_servis'];
    $nama_jasa = $_POST['nama_jasa'];
    $keterangan = $_POST['keterangan'];
    $harga_jasa = $_POST['harga_jasa'];
    $jasa = $_POST['jasa'];

    if ($nama_jasa=="" || $keterangan=="" || $harga_jasa=="" || $jasa=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan data buku <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_servis (id_servis,nama_jasa,keterangan,harga_jasa,jasa) VALUES('$id_servis','$nama_jasa','$keterangan',$harga_jasa,'$jasa');";
  
?>    <meta http-equiv="refresh" content="0;url=servis.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->
<?php
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

<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA SERVIS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label">KODE</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_servis" placeholder="Kode Servis">
        </div>

        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA JASA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_jasa" placeholder="Nama Jasa">
        </div>

        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KETERANGAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan Jasa"></div>
        </div>
         
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">HARGA</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="harga_jasa" placeholder="Harga Jasa">
           </div>
          </div>

          <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">JASA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jasa" placeholder="Jenis Jasa">
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