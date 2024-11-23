<?php
#1 koneksi file ini
include_once("koneksi.php");

#2 mengambil id dari tombol hapus
$name = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$jml_peserta = $_POST['jumlah'];



#3menulis query
$sunting = "UPDATE events SET nama='$name',lokasi='$lokasi',tanggal='$tanggal',jumlah='$jml_peserta' WHERE id='$id'";

#4 jalankan query
$proses = mysqli_query($koneksi,$sunting);

#5 mengalihkan halaman
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>
