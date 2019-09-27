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
          $foto              = $_FILES['image']['name'];
          $data_foto         = $_GET['id'];
                    
                    if($foto == ""){

                        $sql =mysqli_query($conn,"update tb_sekolah set nss = '$nss', nama_sekolah = '$nama_sekolah', jalan = '$jalan', desa = '$desa'
                        , kecamatan = '$kecamatan' , kota = '$kota', provinsi ='$provinsi' , telefon = '$telefon'
                        , email= '$email', kode_pos = '$kode_pos' , tahun_berdiri = '$tahun_berdiri' ,foto = '$data_foto', password = '$password'  WHERE npsn = '$npsn'")or die(mysql_error());

                        echo "
                        <script>
                          alert('Data Berhasil Dirubah');
                          window.location = '../index.php';
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
      $file_location	= "../asset/foto/siswa/";
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
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
         $sql =mysqli_query($conn,"update tb_sekolah set nss = '$nss', nama_sekolah = '$nama_sekolah', jalan = '$jalan', desa = '$desa'
													  , kecamatan = '$kecamatan' , kota = '$kota', provinsi ='$provinsi' , telefon = '$telefon'
													  , email= '$email', kode_pos = '$kode_pos' , tahun_berdiri = '$tahun_berdiri' ,foto = '$file_name', password = '$password'  WHERE npsn = '$npsn'")or die(mysql_error());
								
                                                      echo "
                                                      <script>
                                                        alert('Data Berhasil Dirubah');
                                                        window.location = '../index.php';
                                                      </script>
                                                      ";

      }else{
        echo "
        <script>
          alert('Data Gagal Diubah');
          window.location = '../form_edit_sekolah_index.php?id=$npsn';
        </script>
        ";
         
      }
   
					
    }
	
 ?>