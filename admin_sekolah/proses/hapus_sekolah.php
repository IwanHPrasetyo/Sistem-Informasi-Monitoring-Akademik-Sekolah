<?php 
	include_once("koneksi.php");



					$id        	   = $_GET['id'];
					//$npsn          = $GET['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_sekolah WHERE npsn='$id'")or die(mysql_error());
								

if ($sql) {
	header("location: ../data_sekolah.php");
}

else{

		echo "gagal";
		//header("location: ../form_siswa.php");	
}							


      
         									
	
 ?>