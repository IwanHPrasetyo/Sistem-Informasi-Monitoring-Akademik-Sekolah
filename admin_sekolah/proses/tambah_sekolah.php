<?php 
	include_once("koneksi.php");


					$npsn              = $_POST['npsn'];
					$nss        	   = $_POST['nss'];
					$nama_sekolah      = $_POST['nama_sekolah'];
					$jalan		       = $_POST['jalan'];
					$desa		       = $_POST['desa'];
					$kecamatan     	   = $_POST['kecamatan'];
					$kota     		   = $_POST['kota'];
					$provinsi      	   = $_POST['provinsi'];
					$telefon           = $_POST['telefon'];
					$email             = $_POST['email'];
					$kode_pos          = $_POST['kode_pos'];
					$tahun_berdiri     = $_POST['tahun_berdiri'];
					$password          = $_POST['password'];
					$folder 		   ='../asset/foto/sekolah/';
					
					
					

   if(isset($_FILES['image'])){
      $errors			= array();
      $file_name 		= $_FILES['image']['name'];
      $file_size 		= $_FILES['image']['size'];
      $file_tmp 		= $_FILES['image']['tmp_name'];
      $file_type		= $_FILES['image']['type'];
      $file_location	= "../asset/foto/siswa/";
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
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
      	
      	}

         move_uploaded_file($file_tmp,$file_location.$file_name);
         echo "Success";
         $sql =mysqli_query($conn,"insert into tb_sekolah values ('$npsn', '$nss', '$nama_sekolah', '$jalan', '$desa'
													  , '$kecamatan', '$kota', '$provinsi' , '$telefon','$email'
													  , '$kode_pos' , '$tahun_berdiri' ,'$file_name','$password')")or die(mysqli_error());
								
								header("location: ../data_sekolah.php");


      }else{
         						header("location: ../form_sekolah.php");
         
      }
   
					
	
	
 ?>