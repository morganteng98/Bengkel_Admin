<?php
  if(isset($_POST['buttoninsert'])){
    $id_brg = $_POST['id_brg'];
    $nama_brg = $_POST['nama_brg'];
    $ket_brg = $_POST['ket_brg'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $kode_ktgr = $_POST['kode_ktgr'];
    
    if ($nama_brg=="" || $ket_brg=="" || $harga_beli=="" || $harga_jual=="" || $jumlah=="" || $satuan=="" || $kode_ktgr=="") {
      
  ?>
  <div class="alert alert-danger" role="alert">
      Penambahan DATA BARANG <strong>GAGAL</strong>, harap mengisi semua field
    </div>
    

   <?php
      }else{ 

    $queryinsert = "INSERT INTO tb_barang (id_brg,nama_brg,ket_brg,harga_beli,harga_jual,jumlah,satuan,kode_ktgr) VALUES('$id_brg','$nama_brg','$ket_brg','$harga_beli','$harga_jual','$jumlah','$satuan','$kode_ktgr');";
  
     if(mysqli_query($connection,$queryinsert)){?>
          <meta http-equiv="refresh" content="0;url=data_barang.php"/>
<?php ?>
    <div class="alert alert-primary" role="alert">
      Pelanggan <strong>Berhasil</strong> ditambahkan
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
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA BARANG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">

         <div class="form-group row" style="display: none">
          <label for="inputEmail3" class="col-sm-4 col-form-label">ID BARANG</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_brg" placeholder="ID BARANG">
        </div>
       </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">NAMA BARANG</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_brg" placeholder="Nama Barang">
        </div>
       </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KETERANGAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ket_brg" placeholder="Keterangan Barang">
        </div>
       </div>
        

         
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">HARGA BELI</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga_beli" placeholder="Harga Beli">
        </div>

        </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">HARGA JUAL</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
        </div>
        </div>


        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">STOK</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jumlah" placeholder="Stok Barang">
        </div>
        </div>


         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">SATUAN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="satuan" placeholder="Satuan">
        </div>
        </div>

      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">KATEGORI</label>
          <div class="col-sm-10">
            <select id="kategori" name="kode_ktgr" class="form-control">
         <option value=""> -Pilih Kategori-</option>
         <?php
            $querykategori = mysqli_query($connection, "SELECT * FROM tb_kategori");
            while($j = mysqli_fetch_array($querykategori)){
               echo "<option value='$j[kode_ktgr]'>$j[nama_ktgr]</option>";
            }
         ?>
      </select>
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