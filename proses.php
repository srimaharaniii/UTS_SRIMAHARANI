<?php
#1 koneksi file ini
include("koneksi.php");

#2 mengambil value daro form
$nama = $_POST['nama_event'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$jml_peserta = $_POST['jml_peserta'];

#3menulis query
$simpan = "INSERT INTO events (nama_event,lokasi,tanggal,jml_peserta) VALUES ('$nama','$lokasi',$tanggal','$jml_peserta')";

#4 jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5 mengalihkan halaman
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>