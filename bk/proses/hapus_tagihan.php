<?php 
	include_once("koneksi.php");
	session_start();


					$id_tagihan        	   = $_GET['id'];
					$npsn				   = $_SESSION['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_tagihan WHERE id_tagihan='$id_tagihan' and npsn ='$npsn'")or die(mysqli_error());
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../data_tagihan.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_tagihan.php';
	</script>
	";	
}							


      
         									
	
 ?>