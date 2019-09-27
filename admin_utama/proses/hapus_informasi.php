<?php 
	include_once("koneksi.php");
	session_start();


					$id        	   = $_GET['id'];
					//$npsn          = $_SESSION['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_info_sekolah WHERE id='$id'")or die(mysql_error());
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../index.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../index.php';
	</script>
	";	
}							


      
         									
	
 ?>