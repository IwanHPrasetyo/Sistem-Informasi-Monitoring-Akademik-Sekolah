<?php 
  include_once("koneksi.php");
  session_start();

  $id	= $_GET['id']; 



					$id_sekolah        = $id;
					$infromasi         = $_POST['informasi'];
          $tanggal           = date('m/d/y h:i:s');
          $kode1             = $id.$tanggal;
          $kode2             = str_replace('/','',$kode1);
          $kode3             = str_replace(':','',$kode2);
          $kode_informasi     = str_replace(' ','',$kode3);
					$folder 		       ='../asset/foto/informasi/';
					
					
					

   if(isset($_FILES['image'])){
      $errors			= array();
      $file_name 		= $_FILES['image']['name'];
      $file_size 		= $_FILES['image']['size'];
      $file_tmp 		= $_FILES['image']['tmp_name'];
      $file_type		= $_FILES['image']['type'];
      $file_location	= "../asset/foto/informasi/";
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
      	

         move_uploaded_file($file_tmp,$file_location.$file_name);
         
         $sql =mysqli_query($conn,"insert into tb_info_sekolah values ('$kode_informasi','$id_sekolah','$infromasi','$tanggal','$file_name');")
         or die(mysqli_error());
								
         echo "
         <script>
           alert('Posting Informasi Berhasil');
           window.location = '../index.php';
         </script>
         ";


      }else{
        move_uploaded_file($file_tmp,$file_location.$file_name);
       
        $sql =mysqli_query($conn,"insert into tb_info_sekolah values ('$kode_informasi' , '$id_sekolah', '$infromasi', '$tanggal','$file_name')")or die(mysql_error());
               
        echo "
        <script>
          alert('Posting Informasi Berhasil');
          window.location = '../index.php';
        </script>
        ";
         
      }
   }
					
	
	
 ?>