<?php 
session_start();
include_once("koneksi.php");




					$id        	   = $_GET['id'];
					$npsn		   = $_SESSION['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_jadwal WHERE kode_jadwal='$id' and npsn='$npsn'")or die(mysql_error());
								

if ($sql) {
	echo "
            <script>
              alert('Data Berhasil Dihapus');
              window.location = '../data_jadwal.php';
            </script>
            ";
}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_jadwal.php';
	</script>
	";
}							


      
         									
	
 ?>