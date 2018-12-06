<?php include "function/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Bengkol</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

<body>
<?php include "navigasi.php";
      include "sidebar.php";?>
    
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Jadwal</h1></div>

    <div class="Konten">
      
    <button type="button" class="btn btn-outline-primary " 
    data-toggle="modal" data-target="#modaltambah" >
     <img src="glyph-iconset-master/svg/si-glyph-document-plus.svg" style="height: 25px;" />Tambah Jadwal</button><p>

                
  <?php include "jadwal_tambah.php";?>

          <div class="Konten">
            <?php
              $queryselect = "SELECT * FROM jadwal";
              $resultselect = mysqli_query($connection,$queryselect);
              $no = 0;?>

              <style>
                th{
                  background-color: black;
                  color:white;
                  text-align: center;}
                tr{text-align: center;}
              </style>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">HARI</th>
                  <th scope="col">JAM KERJA</th>
                  <th scope="col" colspan="2">AKSI</th>

                </tr>
              </thead>
              <tbody>
     
<?php
  while ($row=mysqli_fetch_array($resultselect)) {
    $no++;
  ?>
    <tr>
      <td><?= $no ?></td>
      <td><?php echo $row ['hari']; ?></td>
      <td><?php echo $row['jam_kerja']; ?></td>
      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalubah<?php echo $row['id_jadwal']; ?>">Ubah</button></td>
      <td><button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#modalhapus<?php echo $row['id_jadwal']; ?>">Hapus</button></td>
    </tr>
  <?php
?>

<!-- Update jadwal atau ubah jadwal -->
<?php
    if(isset($_POST['buttonubah'])){
        $id_jadwal = $_POST['id_jadwal'];
        $hari = $_POST['hari'];
        $jam_kerja = $_POST['jam_kerja'];

        $queryupdate = "UPDATE jadwal SET hari='$hari',jam_kerja='$jam_kerja' WHERE id_jadwal=$id_jadwal;";?>

      
    <?php
        if(mysqli_query($connection,$queryupdate)){
          echo "";
        }else{
          echo "data tidak berhasil diubah";
        }
      }
  ?>
  
<!-- Modal ubah -->
<div class="modal fade" id="modalubah<?php echo $row['id_jadwal'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT JADWAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      $id=$row['id_jadwal'];
      $queryselectedit = "SELECT * FROM jadwal WHERE id_jadwal=$id";
      $resultselectedit = mysqli_query($connection,$queryselectedit);
      $rowselectedit = mysqli_fetch_assoc($resultselectedit);
      ?>
        <form method="post">
      <div class="modal-body">
                <input type="hidden" name="id_jadwal" value="<?php echo $id;?>">
          
          
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">HARI</label>
            <div class="col-sm-10">
             <select  type="text" class="form-control"  name="hari" placeholder="hari" value="<?php echo $rowselectedit['hari'];?>"> <option value="Senin">Senin</option>
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
            <label for="hari" class="col-sm-4 col-form-label">JAM KERJA</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="jam_kerja" placeholder="JUDUL BUKU" value="<?php echo $rowselectedit['jam_kerja'];?>">
            </div>
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" name="buttonubah" class="btn btn-primary">Ubah</button>
      </div>
    
    </form>
    </div>
  </div>
</div>


</div>

<?php
/*jadwal hapus*/
  include("jadwal_hapus.php");
}
  ?>
  </tbody>
</table>
          </div>
  <!-- Bootstrap inti dari JavaScript
  ================================================== --> 
  <!-- Posisi Jquery diakhir dokumen agar load halaman lebih cepat -->
    <script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>