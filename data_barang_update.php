  <?php
        if(isset($_POST['buttonubah'])){
          $id_brg = $_POST['id_brg'];
          $nama_brg = $_POST['nama_brg'];
          $ket_brg = $_POST['ket_brg'];
          $harga_beli = $_POST['harga_beli'];
          $harga_jual = $_POST['harga_jual'];
          $jumlah = $_POST['jumlah'];
          $satuan = $_POST['satuan'];
          $kode_ktgr = $_POST['kode_ktgr'];

        $queryupdate = "UPDATE tb_barang SET nama_brg='$nama_brg',ket_brg='$ket_brg',harga_beli='$harga_beli',harga_jual='$harga_jual',jumlah='$jumlah',satuan='$satuan',kode_ktgr='$kode_ktgr' WHERE id_brg='$id_brg';";

        ?>
       <meta http-equiv="refresh" content="0;url=data_barang.php">
                <!-- Sebuah fungsi ketika direfresh tidak menambah -->
         
        <?php
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_brg'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UBAH DATA BARANG</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_brg'];
      $queryselectedit = "SELECT * FROM tb_barang WHERE id_brg=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_brg" value="<?php echo $id;?>">
          <div class="form-group row">
            <label for="nama_brg" class="col-sm-4 col-form-label">NAMA BARANG</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_brg" placeholder="NAMA BARANG" value="<?php echo $rowselectedit['nama_brg'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">KETERANGAN BARANG</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="ket_brg" placeholder="KETERANGAN BARANG" value="<?php echo $rowselectedit['ket_brg'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">HARGA BELI</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga_beli" placeholder="HARGA BELI" value="<?php echo $rowselectedit['harga_beli'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">HARGA JUAL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga_jual" placeholder="HARGA JUAL" value="<?php echo $rowselectedit['harga_jual'];?>">
            </div>
          </div>


           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">JUMLAH</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jumlah" placeholder="JUMLAH" value="<?php echo $rowselectedit['jumlah'];?>">
            </div>
          </div>

           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">SATUAN</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="satuan" placeholder="SATUAN" value="<?php echo $rowselectedit['satuan'];?>">
            </div>
          </div>

           

<div class="form-group-row">
  <label for="inputEmail3" class="col-sm-4 col-form-label" type="text">KATEGORI</label>
            <div class="col-sm-10">
            <select  id="kategori" name="kode_ktgr"  class="form-control">
         <option>-Pilih Kategori-</option>
         <?php
            $querykategori = mysqli_query($connection, "SELECT * FROM tb_kategori");
            while($j = mysqli_fetch_array($querykategori)){
               echo "<option value='$j[kode_ktgr]'>$j[nama_ktgr]</option>";
            }
         ?>
      </select>
        </div>
          </p>          
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="buttonubah" class="btn btn-primary">Ubah</button>
      </div>
    
    </form>
    </div>
  </div>
</div>