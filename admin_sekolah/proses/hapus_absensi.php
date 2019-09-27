<?php 
	include_once("koneksi.php");
	session_start();


					$id        	   = $_GET['id'];
					$npsn          = $_SESSION['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_absensi WHERE kode_absensi='$id' and npsn = '$npsn'");
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../data_absensi.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_absensi.php';
	</script>
	";	
}							


      
         									
	
 ?>