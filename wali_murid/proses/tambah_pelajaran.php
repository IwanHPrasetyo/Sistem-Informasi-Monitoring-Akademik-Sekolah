<?php 
  include_once("koneksi.php");
  session_start();
  

          $kode_mapel             = $_POST['kode_mapel'];
					$nama_pelajaran         = $_POST['nama_pelajaran'];
					$semester               = $_POST['semester'];
					$seri                   = $_POST['seri'];
					$beban_belajar          = $_POST['beban_belajar'];
          $npsn                   = $_SESSION['npsn'];
					

   
         $sql =mysqli_query($conn,"insert into tb_pelajaran values ('$kode_mapel' , '$nama_pelajaran', '$semester', '$seri','$beban_belajar','$npsn')");
  
      if($sql){
        echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          window.location = '../data_pelajaran.php';
        </script>
        ";


      }elseif(!$sql){
        echo "
        <script>
          alert('Data Gagal Ditambahkan');
          window.location = '../form_mata_pelajaran.php';
        </script>
        ";
         
      }
   
					
	
	
 ?>