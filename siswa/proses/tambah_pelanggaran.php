<?php 
  include_once("koneksi.php");
  session_start();
  $npsn = $_SESSION['npsn'];
  

          $kode_pelanggaran       = $_POST['kode_pelanggaran'];
					$nama_pelanggaran       = $_POST['nama_pelanggaran'];
					$jenis_pelanggaran      = $_POST['jenis_pelanggaran'];
					$bobot                  = $_POST['bobot'];
          
					

   
         $sql =mysqli_query($conn,"insert into tb_pelanggaran values ('$kode_pelanggaran' , '$nama_pelanggaran','$jenis_pelanggaran' ,'$bobot','$npsn')")or die(mysql_error());
  
      if($sql){
        echo "
        <script>
          alert('Data Berhasil Ditambahkan');
          window.location = '../data_pelanggaran.php';
        </script>
        ";


      }else{
        echo "
        <script>
          alert('Data Gagal Ditambahkan');
          window.location = '../data_pelanggaran.php';
        </script>
        ";
         
      }
   
					
	
	
 ?>