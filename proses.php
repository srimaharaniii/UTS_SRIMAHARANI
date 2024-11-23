<?php
#1 koneksi file ini
include("koneksi.php");

#2 mengambil value daro form
$name = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

#3menulis query
$simpan = "INSERT INTO events (nama,lokasi,tanggal,jumlah) VALUES ('$name','$lokasi',$tanggal','$jumlah')";

#4 jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5 mengalihkan halaman
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>