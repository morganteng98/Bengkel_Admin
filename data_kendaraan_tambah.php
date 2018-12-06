<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH PELANGGAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="Nama Barang" placeholder="Nama Barang">
        </div>
       </div>

         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
        </div>
       </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Barang</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="Jenis Barang" placeholder="Jenis Barang">
        </div>
       </div>
        

         
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="keterangan" placeholder="keterangan">
        </div>

        </div>

<div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih gambar</label>
          <div class="col-sm-10">
              <input type="file"  accept="image/*" name="gambar">
              <input type="submit" name="upload" value="Unggah">           
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