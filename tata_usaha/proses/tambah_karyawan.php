<?php 
  include_once("koneksi.php");
  session_start();

					$kode_guru          = $_POST['kode_guru'];
          $nip        	      = $_POST['nip'];
          $npsn               = $_SESSION['npsn'];
					$nama_karyawan      = $_POST['nama_karyawan'];
					$status_kepegawaian = $_POST['status_kepegawaian'];
					$bidang 		        = $_POST['bidang'];
					$alamat     	      = $_POST['alamat'];
					$telefon     	      = $_POST['telefon'];
					
					
					

   if(isset($_FILES['image'])){
      $errors			= array();
      $file_name 		= $_FILES['image']['name'];
      $file_size 		= $_FILES['image']['size'];
      $file_tmp 		= $_FILES['image']['tmp_name'];
      $file_type		= $_FILES['image']['type'];
      $file_location	= "../asset/foto/guru/";
      //$file_ext=strtolower(end(explode('.',$file_name)));
	  
	  $name_ex = explode('.',$file_name);
	  $file_ext=strtolower(end($name_ex));

      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 20097152){
         $errors[]='File size must be excately 20 MB';
      }
      
      if(empty($errors)==true){
      	
			
			$jenis_kelamin = $_POST['jenis_kelamin'];

      		if ($jenis_kelamin=="Laki-Laki") {
      			$kodeJK = "L";
      		}elseif ($jenis_kelamin=="Perempuan") {
      			$kodeJK = "P";
      		}else{
      			$kodeJK = "";
			  }


         move_uploaded_file($file_tmp,$file_location.$file_name);
         echo "Success";
         $sql =mysqli_query($conn,"insert into tb_karyawan values ('$kode_guru' , '$nip','$npsn', '$nama_karyawan', '$kodeJK','$status_kepegawaian','$bidang', '$telefon' , '$alamat', '$file_name')")
													  or die(mysqli_error());
								
                            echo "
                            <script>
                              alert('Data Berhasil Ditambahkan');
                              window.location = '../data_karyawan.php';
                            </script>
                            ";


      }else{
        echo "
        <script>
          alert('Data Gagal Ditambahkan');
          window.location = '../form_guru.php';
        </script>
        ";
         
      }
   }
					
	
	
 ?>