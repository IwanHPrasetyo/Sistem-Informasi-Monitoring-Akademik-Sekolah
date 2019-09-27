<?php 
	include_once("koneksi.php");
	session_start();
	$npsn =$_SESSION['npsn'];



					$nipd              = $_POST['nipd'];
					$nisn        	   = $_POST['nisn'];
					$nama_siswa        = $_POST['nama_siswa'];
					$tempat_lahir      = $_POST['tempat_lahir'];
					$tanggal_lahir     = $_POST['tanggal_lahir'];
					$alamat     	   = $_POST['alamat'];
					$telefon     	   = $_POST['telefon'];
					$agama      	   = $_POST['agama'];
					$nama_ayah         = $_POST['nama_ayah'];
					$pekerjaan_ayah    = $_POST['pekerjaan_ayah'];
					$nama_ibu          = $_POST['nama_ibu'];
					$pekerjaan_ibu     = $_POST['pekerjaan_ibu'];
					$nama_wali	       = $_POST['nama_wali'];
					$pekerjaan_wali    = $_POST['pekerjaan_wali'];
					$anak_ke		   = $_POST['anak_ke'];
					$asal_sekolah	   = $_POST['asal_sekolah'];
					$status_siswa 	   = $_POST['status_siswa'];
					$folder 		   ='../asset/foto/siswa/';
					$foto              = $_FILES['image']['name'];

					if($foto == ""){

						$file_name = $_SESSION['foto_siswa'];


						if (isset($_POST['jenis_kelamin'])) {
      		
							$jenis_kelamin = $_POST['jenis_kelamin'];
			  
							if ($jenis_kelamin=="Laki-Laki") {
								$kodeJK = "L";
							}elseif ($jenis_kelamin=="Perempuan") {
								$kodeJK = "P";
							}else{
								$kodeJK = "";
							}
			  
			  
							$kewarganegaraan = $_POST['kewarganegaraan'];
			  
							if ($kewarganegaraan=="Warga Negara Indonesia") {
								$kodeK = "WNI";
							}elseif ($kewarganegaraan=="Warga Negara Asing") {
								$kodeK = "WNA";
							}else{
								$kodeK = "";
							}
			  
			  
							$kelas = $_POST['kelas'];
			  
							if ($kelas=="X") {
								$kodeKLS = "KL1";
							}elseif ($kelas=="XI") {
								$kodeKLS = "KL2";
							}elseif ($kelas=="XII") {
								$kodeKLS = "KL3";
							}else{
								$kodeKLS = "";
							}
			  
							$jurusan = $_POST['jurusan'];
			  
						  $sql_jurusan  = mysqli_query($conn,"SELECT * FROM tb_jurusan where nama_jurusan ='$jurusan' and npsn='$npsn' "); 
						  $data_jurusan = mysqli_fetch_array($sql_jurusan);
								
						  $kodeJRS = $data_jurusan['id_jurusan'];
			  
						}
					   $sql =mysqli_query($conn,"update tb_siswa set nama_siswa = '$nama_siswa', nisn = '$nisn', jk = '$kodeJK'
																	, tmp_lahir = '$tempat_lahir' , tgl_lahir = '$tanggal_lahir', alamat ='$alamat' , telefon = '$telefon'
																	, agama = '$agama' , negara = '$kodeK' , nama_ayah = '$nama_ayah' , pekerjaan_ayah = '$pekerjaan_ayah' , nama_ibu = '$nama_ibu'
																	, pekerjaan_ibu = '$pekerjaan_ibu' , nama_wali = '$nama_wali' , pekerjaan_wali = '$pekerjaan_wali' , anak_ke = '$anak_ke'
																	, id_kelas = '$kodeKLS' , id_jurusan = '$kodeJRS', asal_sekolah = '$asal_sekolah', status_sekolah = '$status_siswa',foto = '$file_name' WHERE nipd = '$nipd'")or die(mysql_error());
											  
					  if($sql){
			  
						  echo "<script>
							  alert('Data Berhasil Ubah');
							  window.location = '../data_siswa.php';
							  </script>";
			  
					  }else{
			  
					  echo "
					  <script>
						alert('Data Gagal Ubah');
						window.location = '../form_siswa.php';
					  </script>
					  ";
			  
					  }


					}
					else{
					
					
					

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
      	if (isset($_POST['jenis_kelamin'])) {
      		
      		$jenis_kelamin = $_POST['jenis_kelamin'];

      		if ($jenis_kelamin=="Laki-Laki") {
      			$kodeJK = "L";
      		}elseif ($jenis_kelamin=="Perempuan") {
      			$kodeJK = "P";
      		}else{
      			$kodeJK = "";
      		}


      		$kewarganegaraan = $_POST['kewarganegaraan'];

      		if ($kewarganegaraan=="Warga Negara Indonesia") {
      			$kodeK = "WNI";
      		}elseif ($kewarganegaraan=="Warga Negara Asing") {
      			$kodeK = "WNA";
      		}else{
      			$kodeK = "";
      		}


      		$kelas = $_POST['kelas'];

      		if ($kelas=="X") {
      			$kodeKLS = "KL1";
      		}elseif ($kelas=="XI") {
      			$kodeKLS = "KL2";
      		}elseif ($kelas=="XII") {
      			$kodeKLS = "KL3";
      		}else{
      			$kodeKLS = "";
      		}

      		$jurusan = $_POST['jurusan'];

			$sql_jurusan  = mysqli_query($conn,"SELECT * FROM tb_jurusan where nama_jurusan ='$jurusan' and npsn='$npsn' "); 
			$data_jurusan = mysqli_fetch_array($sql_jurusan);
				  
			$kodeJRS = $data_jurusan['id_jurusan'];

      	}

         move_uploaded_file($file_tmp,$file_location.$file_name);
         echo "Success";
         $sql =mysqli_query($conn,"update tb_siswa set nama_siswa = '$nama_siswa', nisn = '$nisn', jk = '$kodeJK'
													  , tmp_lahir = '$tempat_lahir' , tgl_lahir = '$tanggal_lahir', alamat ='$alamat' , telefon = '$telefon'
													  , agama = '$agama' , negara = '$kodeK' , nama_ayah = '$nama_ayah' , pekerjaan_ayah = '$pekerjaan_ayah' , nama_ibu = '$nama_ibu'
													  , pekerjaan_ibu = '$pekerjaan_ibu' , nama_wali = '$nama_wali' , pekerjaan_wali = '$pekerjaan_wali' , anak_ke = '$anak_ke'
													  , id_kelas = '$kodeKLS' , id_jurusan = '$kodeJRS', asal_sekolah = '$asal_sekolah', status_sekolah = '$status_siswa',foto = '$file_name' WHERE nipd = '$nipd'")or die(mysql_error());
								
		if($sql){

			echo "<script>
				alert('Data Berhasil Ubah');
				window.location = '../data_siswa.php';
				</script>";

		}else{

	    echo "
		<script>
		  alert('Data Gagal Ubah');
		  window.location = '../form_siswa.php';
		</script>
		";

		}
								


      }else{

		echo "
		<script>
		  alert('Data Gagal Ubah');
		  window.location = '../form_siswa.php';
		</script>
		";
         						
         
      }
   }
}
	
	
 ?>