<?php 
	include_once("koneksi.php");



					$id        	   = $_GET['id'];
					
					
         $sql =mysqli_query($conn,"DELETE from tb_jurusan WHERE id_jurusan='$id'");
								

if ($sql) {
	echo "
            <script>
              alert('Data Berhasil Dihapus');
              window.location = '../data_kelas.php';
            </script>
            ";
}

else{

	echo "
			<script>
	  		alert('Data Gagal Dihapus');
	  		window.location = '../data_kelas.php';
			</script>
			";	
}							


      
         									
	
 ?>