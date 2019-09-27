<?php 
	include_once("koneksi.php");



					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_pembayaran WHERE id_pembayaran='$id'")or die(mysqli_error());
								

if ($sql) {
	echo "
	<script>
	  alert('Data Berhasil Dihapus');
	  window.location = '../data_administrasi.php';
	</script>
	";
}

elseif(!$sql){

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_administrasi.php';
	</script>
	";	
}							


      
         									
	
 ?>