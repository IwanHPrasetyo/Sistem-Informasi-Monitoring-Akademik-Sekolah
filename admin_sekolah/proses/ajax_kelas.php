<?php
include_once('koneksi.php');

$nama_kelas = $_POST['kelas']; 

$s = mysqli_query($conn,"SELECT * from tb_kelas where nama_kelas='$nama_kelas'"); // Ambil nama mahasiswa berdasarkan npm yang dikirim dari jquery ajax
while ($data = mysqli_fetch_array($s)) {        
       $kelas = $data['id_kelas'];
       echo $kelas;            // Print nama hasil perolehan dari query database
}
?>