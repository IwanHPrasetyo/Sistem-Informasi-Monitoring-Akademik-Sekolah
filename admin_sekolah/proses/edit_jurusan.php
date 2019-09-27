<?php 
  include_once("koneksi.php");
  

          
          $nama_jurusan           = $_POST['nama_jurusan'];
          $id_jurusan             = $_GET['id'];

   
         $sql =mysqli_query($conn,"update tb_jurusan set nama_jurusan ='$nama_jurusan' where id_jurusan = '$id_jurusan'");
  
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