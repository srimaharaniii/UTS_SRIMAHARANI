<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
  

<div class="container">
    <div clas="row mt-">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Data Event</h3>
                <span class="float-end "><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i>Tambah Data</a></span>

            </div>
            <div class="card-body">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama Event</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jumlah Peserta</th>
    </tr>
  </thead>
  <tbody>
      <?php
          #1 koneksi file ini
          include("koneksi.php");

          #2 menulis query
          $tampil = "SELECT * FROM events";

          #4 jalankan query
          $proses = mysqli_query($koneksi,$tampil);

          # looping data dari database
          $nomor = 1;
          foreach ($proses as $data){;

      ?>
    <tr>
      <th scope="row"><?=$nomor++?></th>
      <td><?=$data['nama_event']?></td>
      <td><?=$data['lokasi']?></td>
      <td><?=$data['tanggal']?></td>
      <td><?=$data['jml_peserta']?></td>
      <td>
        <a class="btn btn-info btn-sm" href="edit.php?id=<?=$data['id']?>"><i class="fa-solid fa-pen-to-square"></i></a>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?=$data['id']?>">
        <i class="fa-solid fa-trash"></i>
        </button>
        <!-- Modal -->
      <div class="modal fade" id="hapus<?=$data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Yakin data <b><?=$data['jurusan']?></b> ingin dihapus
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <a href="hapus.php?xyz=<?=$data['id']?>" class="btn btn-primary">Hapus</a>
            </div>
          </div>
        </div>
      </div>
    
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
            </div>
            </div>
        </div>
    </div>
</div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>