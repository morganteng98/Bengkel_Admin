<?php
  if(isset($_POST['buttonhapus'])){
    $kode_ktgr = $_POST['kode_ktgr'];

    $querydelete = "DELETE FROM tb_kategori WHERE kode_ktgr=$kode_ktgr";

    if (mysqli_query($connection,$querydelete)) {
?>

    <meta http-equiv="refresh" content="0;url=data_kategori.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->

  <?php
    }else{
      echo "gagal menghapus";
    }
  }
?>

<!-- Modal hapus -->
  <div class="modal fade" id="modalhapus<?php echo $row['kode_ktgr'];?>" tabindex="-1"
  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT tb_kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>

<!--Perintah MENAMPILKAN hapus atau modal hapus -->
      <?php

      $id=$row['kode_ktgr'];
      $queryselecthapus = "SELECT * FROM tb_kategori WHERE kode_ktgr=$id";
      $resultselecthapus = mysqli_query($connection,$queryselecthapus);
      $rowselecthapus = mysqli_fetch_assoc($resultselecthapus);
      
      ?>
        
<!-- modal hapus -->
        <form method="post">
            <div class="modal-body">
              <input type="hidden" name="kode_ktgr" value="<?php echo $id;?>">
              Apakah anda yakin ingin menghapus tb_kategori no <strong><?php echo $rowselecthapus['nama_ktgr'];?></strong> ini?
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              <button type="submit" name="buttonhapus" class="btn btn-danger">Hapus</button>
            </div>
            
        </form>
    </div>
  </div>
</div>