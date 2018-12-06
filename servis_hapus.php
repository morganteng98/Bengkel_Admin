<?php
  if(isset($_POST['buttonhapus'])){
    $id_servis = $_POST['id_servis'];

    $querydelete = "DELETE FROM tb_servis WHERE id_servis=$id_servis";

    if (mysqli_query($connection,$querydelete)) {
?>

    <meta http-equiv="refresh" content="0;url=servis.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->

  <?php
    }else{
      echo "gagal menghapus";
    }
  }
?>

<!-- Modal hapus -->
  <div class="modal fade" id="modalhapus<?php echo $row['id_servis'];?>" tabindex="-1"
  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HAPUS SERVIS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>

<!--Perintah MENAMPILKAN hapus atau modal hapus -->
      <?php

      $id=$row['id_servis'];
      $queryselecthapus = "SELECT * FROM tb_servis WHERE id_servis=$id";
      $resultselecthapus = mysqli_query($connection,$queryselecthapus);
      $rowselecthapus = mysqli_fetch_assoc($resultselecthapus);
      
      ?>
        
<!-- modal hapus -->
        <form method="post">
            <div class="modal-body">
              <input type="hidden" name="id_servis" value="<?php echo $id;?>">
              Apakah anda yakin ingin menghapus data servis <strong><?php echo $rowselecthapus['nama_jasa'];?></strong> ini?
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              <button type="submit" name="buttonhapus" class="btn btn-danger">Hapus</button>
            </div>
            
        </form>
    </div>
  </div>
</div>