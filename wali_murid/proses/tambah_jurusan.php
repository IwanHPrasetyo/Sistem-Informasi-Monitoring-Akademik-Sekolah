<?php 
  include_once("koneksi.php");
  session_start();
  

          
          $npsn                   = $_SESSION['npsn'];
          $nama_jurusan           = $_POST['nama_jurusan'];
          $id_jurusan             = $npsn.$nama_jurusan;

   
         $sql =mysqli_query($conn,"insert into tb_jurusan values ('$id_jurusan' , '$nama_jurusan','$npsn')");
  
      if($sql){
                
            echo "
            <script>
              alert('Data Berhasil Disimpan');
              window.location = '../data_kelas.php';
            </script>
            ";


      }else{
        echo "
        <script>
          alert('Data Gagal Disimpan');
          window.location = '../form_jurusan.php';
        </script>
        ";
         
      }
   
					
	
	
 ?>