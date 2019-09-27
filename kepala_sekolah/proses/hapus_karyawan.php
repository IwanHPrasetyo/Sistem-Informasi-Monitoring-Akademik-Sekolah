<?php 
	include_once("koneksi.php");
	session_start();


					$id        	   = $_GET['id'];
					$npsn					 = $_SESSION['npsn'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_karyawan WHERE kode_guru='$id' and npsn='$npsn'")or die(mysql_error());
								

if ($sql) {
	echo "
                            <script>
                              alert('Data Berhasil Dihapus');
                              window.location = '../data_karyawan.php';
                            </script>
                            ";

}

else{

	echo "
	<script>
	  alert('Data Gagal Dihapus');
	  window.location = '../data_karyawan.php';
	</script>
	";

}							


      
         									
	
 ?>