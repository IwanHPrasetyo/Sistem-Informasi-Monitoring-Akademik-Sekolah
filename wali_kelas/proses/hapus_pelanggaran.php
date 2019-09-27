<?php 
	include_once("koneksi.php");
	session_start();
	$npsn = $_SESSION['npsn'];


					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_pelanggaran WHERE kode_pelanggaran='$id' and npsn='$npsn'")or die(mysql_error());
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../data_pelanggaran.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_pelanggaran.php';
	</script>
	";
}							


      
         									
	
 ?>