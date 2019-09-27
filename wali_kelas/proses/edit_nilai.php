<?php 
  include_once("koneksi.php");
  

          $id = $_GET['id'];
          $nilai = $_POST['nilai'];
          
          
          if($nilai >= 88 && $nilai <= 100){

            $bobot = 'A';

          }
          elseif($nilai >= 74 && $nilai <= 87){

            $bobot = 'B';

          }
          elseif($nilai >= 60 && $nilai <= 73){

            $bobot = 'C';

          }
          elseif($nilai < 60){

            $bobot = 'D';

          }
          

            
            $sql = mysqli_query($conn,"update tb_nilai_akademik set nilai ='$nilai',bobot = '$bobot' where id_nilai ='$id'"); 
          


    if($sql){

      echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        window.location = '../form_nilai_siswa.php';
      </script>
      ";

    }

    elseif(!$sql){
      
            echo "
            <script>
              alert('Data Sudah Ditambahkan');
              window.location = '../form_nilai_siswa.php';
            </script>
            ";
      
          }

      

         
  
      
   
					
	
	
 ?>