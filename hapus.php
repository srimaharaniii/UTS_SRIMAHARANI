<?php
#1 koneksi file ini
include("koneksi.php");

#2 mengambil id dari tombol hapus
$id = $_GET['xyz'];


#3menulis query
$hapus = "DELETE FROM events WHERE id='$id'";

#4 jalankan query
$proses = mysqli_query($koneksi,$hapus);

#5 mengalihkan halaman
// header("location:index.php");
?>

<script>
    document.location="index.php";
</script>
