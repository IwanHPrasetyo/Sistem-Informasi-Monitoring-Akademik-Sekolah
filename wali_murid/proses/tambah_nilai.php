<?php 
  include_once("koneksi.php");
  session_start();

          $nama_pelajaran         = $_POST['nama_pelajaran'];
					$nama_kelas             = $_POST['nama_kelas'];
					$nama_jurusan           = $_POST['nama_jurusan'];
					$keterangan             = $_POST['keterangan'];
          $tanggal                = date('m/d/y');
          $tahun                  = date('y');
          $npsn                   = $_SESSION['npsn'];
          

          $sql_pelajaran  = mysqli_query($conn,"SELECT * FROM tb_pelajaran where nama_pelajaran = '$nama_pelajaran'");
          $data_pelajaran = mysqli_fetch_array($sql_pelajaran);

          $sql_kelas  = mysqli_query($conn,"SELECT * FROM tb_kelas where nama_kelas = '$nama_kelas'");
          $data_kelas = mysqli_fetch_array($sql_kelas);

          $id_kelas = $data_kelas['id_kelas'];

          $sql_jurusan  = mysqli_query($conn,"SELECT * FROM tb_jurusan where nama_jurusan = '$nama_jurusan'");
          $data_jurusan = mysqli_fetch_array($sql_jurusan);

          $id_jurusan = $data_jurusan['id_jurusan'];

          $sql_siswa = "SELECT * FROM tb_siswa where id_kelas='$id_kelas' and id_jurusan ='$id_jurusan'";
          $data_siswa = $conn->query($sql_siswa);
          
        

          while($row = $data_siswa->fetch_array()){ 

            $id_siswa   = $row['nipd'];
            $kode_mapel = $data_pelajaran['kode_mapel'];
            $semester   = $data_pelajaran['semester'];
            $id = $tahun.$npsn.$kode_mapel.$id_siswa;
            
            $sql = mysqli_query($conn,"insert into tb_nilai_akademik values ('$id' , '$id_siswa', '$kode_mapel', '$npsn','$id_kelas'
            ,'$id_jurusan','','','$semester','$keterangan','$tahun')"); 
          

            
       
    }

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