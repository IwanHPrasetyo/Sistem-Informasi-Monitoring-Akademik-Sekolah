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
					$password          = md5($_POST['password']);
                    $folder 		   ='../asset/foto/sekolah/';
                    $foto              = $_FILES['image'];
                    
            
   if(isset($foto)){
      $errors			= array();
      $file_name 		= $foto['name'];
      $file_size 		= $foto['size'];
      $file_tmp 		= $foto['tmp_name'];
      $file_type		= $foto['type'];
      $file_location	= "../asset/foto/siswa/";
      $file_ext=strtolower(end(explode('.',$foto['name'])));
      
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
         $sql =mysqli_query($conn,"update tb_sekolah set nss = '$nss', nama_sekolah = '$nama_sekolah', jalan = '$jalan', desa = '$desa'
													  , kecamatan = '$kecamatan' , kota = '$kota', provinsi ='$provinsi' , telefon = '$telefon'
													  , email= '$email', kode_pos = '$kode_pos' , tahun_berdiri = '$tahun_berdiri' ,foto = '$file_name', password = '$password'  WHERE npsn = '$npsn'")or die(mysql_error());
								
								header("location: ../data_sekolah.php");


      }else{
         						header("location: ../form_edit_sekolah.php");
         
      }
	
 ?>