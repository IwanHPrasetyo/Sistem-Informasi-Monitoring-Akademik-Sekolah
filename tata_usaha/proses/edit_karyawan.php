<?php 
	include_once("koneksi.php");
session_start();
					$kode_guru         = $_POST['kode_guru'];
          $nip        	     = $_POST['nip'];
          $npsn              = $_SESSION['npsn'];
					$nama_karyawan     = $_POST['nama_karyawan'];
					$status_kepegawaian= $_POST['status_kepegawaian'];
					$bidang 		       = $_POST['bidang'];
					$alamat     	     = $_POST['alamat'];
          $telefon     	     = $_POST['telefon'];
          $foto              = $_FILES['image']['name'];

          if($foto == ""){
          $file_name = $_SESSION['foto_prfile']; 

          $jenis_kelamin = $_POST['jenis_kelamin'];

      		if ($jenis_kelamin=="Laki-Laki") {
      			$kodeJK = "L";
      		}elseif ($jenis_kelamin=="Perempuan") {
      			$kodeJK = "P";
      		}else{
      			$kodeJK = "";
			  }


         $sql =mysqli_query($conn,"update tb_karyawan set nip='$nip', npsn='$npsn', nama_karyawan='$nama_karyawan', jk='$kodeJK', status_kepegawaian='$status_kepegawaian', bidang='$bidang', telefon='$telefon', alamat='$alamat', foto='$file_name' where kode_guru = '$kode_guru';")
													  or die(mysqli_error());



            echo "
            <script>
              alert('Data Berhasil Ubah');
              window.location = '../data_karyawan.php';
            </script>
            ";
          }

          
          else{


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
         $sql =mysqli_query($conn,"update tb_karyawan set nip='$nip', npsn='$npsn', nama_karyawan='$nama_karyawan', jk='$kodeJK', status_kepegawaian='$status_kepegawaian', bidang='$bidang', telefon='$telefon', alamat='$alamat', foto='$file_name' where kode_guru = '$kode_guru';")
													  or die(mysqli_error());
								
                            echo "
                            <script>
                              alert('Data Berhasil Ubah');
                              window.location = '../data_karyawan.php';
                            </script>
                            ";
                          }


      }else{
        echo "
        <script>
          alert('Data Gagal Ubah');
          window.location = '../form_guru.php';
        </script>
        ";
      }
         
      }
   
	
 ?>