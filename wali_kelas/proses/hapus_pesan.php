<?php 
	include_once("koneksi.php");



					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_pesan WHERE id_pesan='$id'");
								

if ($sql) {
	echo "
	<script>
	  alert('Pesan Berhasil Dihapus');
	  window.location = '../data_pesan.php';
	</script>
	";
}

else{

	echo "
	<script>
	  alert('Pesan Gagal Dihapus');
	  window.location = '../data_pesan.php';
	</script>
	";	
}							


      
         									
	
 ?>