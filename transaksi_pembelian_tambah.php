<!-- name pada masing2 row masih belum -->

<!-- Modal Tambah Buku -->

<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PEMBELIAN BARANG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
      </div>

  <form method="post">
    <div class="modal-body">
      <label style="background-color: lightblue"><h3>DATA TRANSAKSI</h3></label>
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label">No.Pembelian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="no_beli" placeholder="Nomor Pembelian">
        </div>

         </div>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Pembelian</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tgl_beli" placeholder="TANGGAL PEMBELIAN">
        </div>
       </div>
         
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="ket_beli" placeholder="Keterangan"></div>
        </div>

         <label style="background-color: lightblue"><h3>INPUT  BARANG</h3></label>
         <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Kategori</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="ktgr_beli" placeholder="Kategori">
           </div>
          </div>
            <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
           </div>
          </div>

          <div class="form-group row">
          <label for="inputEmail3" class="col-sm-4 col-form-label">Harga</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga_beli" placeholder="Harga Beli">          
              <input type="text" class="form-control" name="jmlh_brng" placeholder="Jumlah Barang">
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