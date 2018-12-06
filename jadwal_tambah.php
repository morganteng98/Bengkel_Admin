<?php
  if(isset($_POST['buttoninsert'])){
    $id_jadwal = $_POST['id_jadwal'];
    $hari = $_POST['hari'];
    $jam_kerja = $_POST['jam_kerja'];
   
    if ($hari=="" || $jam_kerja=="" ) {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Gagal menambah <strong>JADWAL</strong>, harap mengisi <b>Hari</b> dan <b>Jam Kerja</b>
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO jadwal (id_jadwal,hari,jam_kerja) VALUES('$id_jadwal','$hari','$jam_kerja');";

?>    <meta http-equiv="refresh" content="1;url=jadwal.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->
<?php
  
  
     if(mysqli_query($connection,$queryinsert)){
?>
    

    
    <div class="alert alert-primary" role="alert">
      Jadwal <b>Berhasil</b> ditambahkan ...
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA JADWAL</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
        <div class="form-group row" style="display: none">
          <label for="" class="col-sm-4 col-form-label">ID</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="id_jadwal" placeholder="NO">
        </div>

        </div>

        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">HARI</label>
          <div class="col-sm-10">
           <select name="hari"    type="text" class="form-control">
              <option>Pilih Hari</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Kamis">Jumat</option>
              <option value="Kamis">Sabtu</option>            
              <option value="Minggu">Minggu</option>
              <option value="Senin-Kamis">Senin-Kamis</option>
              <option value="Senin-Jumat">Senin-Jumat</option>
              <option value="Senin-Sabtu">Senin Sabtu</option>
              <option value="Sabtu-Minggu">Sabtu Minggu</option>
            </select></div>


        </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">JAM KERJA</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jam_kerja" placeholder="JAM KERJA">
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