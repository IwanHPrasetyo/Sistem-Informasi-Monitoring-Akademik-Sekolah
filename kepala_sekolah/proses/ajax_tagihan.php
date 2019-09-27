<?php
include_once('koneksi.php');
session_start();
$npsn = $_SESSION['npsn'];

$nama_tagihan = $_POST['nama_tagihan']; 

$s = mysqli_query($conn,"SELECT * from tb_tagihan where nama_tagihan='$nama_tagihan' and npsn ='$npsn'"); // Ambil nama mahasiswa berdasarkan npm yang dikirim dari jquery ajax
while ($data = mysqli_fetch_array($s)) {        
       $tagihan = $data['nominal_tagihan'];
       $format = "Rp.".number_format($tagihan,0,',','.');
       echo $format;            // Print nama hasil perolehan dari query database
}
?>