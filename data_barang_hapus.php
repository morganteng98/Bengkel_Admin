<?php
  if(isset($_POST['buttonhapus'])){
    $id_brg = $_POST['id_brg'];

    $querydelete = "DELETE FROM tb_barang WHERE id_brg=$id_brg";

    if (mysqli_query($connection,$querydelete)) {
?>

    <meta http-equiv="refresh" content="0;url=data_barang.php"/>
    <!--Fungsi ketika direfresh dengan waktu 0 detik -->

  <?php
    }else{
      echo "gagal menghapus";
    }
  }
?>

<!-- Modal hapus -->
  <div class="modal fade" id="modalhapus<?php echo $row['id_brg'];?>" tabindex="1"
  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HAPUS BARANG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
      </div>

<!--Perintah MENAMPILKAN hapus atau modal hapus -->
      <?php

      $id=$row['id_brg'];
      $queryselecthapus = "SELECT * FROM tb_barang WHERE id_brg=$id";
      $resultselecthapus = mysqli_query($connection,$queryselecthapus);
      $rowselecthapus = mysqli_fetch_assoc($resultselecthapus);
      
      ?>
        
<!-- modal hapus -->
        <form method="post">
            <div class="modal-body">
              <input type="hidden" name="id_brg" value="<?php echo $id;?>">
              Apakah anda yakin ingin menghapus barang <strong><?php echo $rowselecthapus['id_brg'];?></strong> ini?
            
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
              <button type="submit" name="buttonhapus" class="btn btn-danger">Hapus</button>
            </div>
            
        </form>
    </div>
  </div>
</div>