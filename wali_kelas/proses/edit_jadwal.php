<?php 
  include_once("koneksi.php");
  session_start();
  

         
					$nama_pelajaran         = $_POST['nama_pelajaran'];
					$kelas                  = $_POST['kelas'];
					$nama_jurusan           = $_POST['nama_jurusan'];
					$jam_ke                 = $_POST['jam_ke'];
					$jam_mulai              = $_POST['jam_mulai'];
					$jam_akhir              = $_POST['jam_akhir'];
					$hari                   = $_POST['hari'];
          $npsn                   = $_SESSION['npsn'];


          $sql_kelas      = mysqli_query($conn,"SELECT * FROM tb_kelas where nama_kelas ='$kelas'");
          $data_kelas     = mysqli_fetch_array($sql_kelas);
          $id_kelas       = $data_kelas['id_kelas'];

          $sql_pelajaran  = mysqli_query($conn,"SELECT * FROM tb_pelajaran where nama_pelajaran = '$nama_pelajaran' and npsn = '$npsn'");
          $data_pelajaran = mysqli_fetch_array($sql_pelajaran);
          $kode_pelajaran = $data_pelajaran['kode_mapel'];

          $sql_jurusan    = mysqli_query($conn,"SELECT * FROM tb_jurusan where nama_jurusan ='$nama_jurusan' and npsn ='$npsn'");
          $data_jurusan   = mysqli_fetch_array($sql_jurusan);
          $id_jurusan     = $data_jurusan['id_jurusan'];

          $kode_jadwal    = $_GET['id'];
   
          $sql =mysqli_query($conn,"update tb_jadwal set kode_mapel = '$kode_pelajaran', jam_ke = '$jam_ke', jam_mulai = '$jam_mulai',jam_akhir = '$jam_akhir',hari = '$hari',id_kelas = '$id_kelas',id_jurusan = '$id_jurusan' where kode_jadwal = '$kode_jadwal' and npsn = '$npsn'")or die (mysqli_error());
  
      if($sql){
        echo "
        <script>
          alert('Data Berhasil Diubah');
          window.location = '../data_jadwal.php';
        </script>
        ";


      }elseif(!$sql){
    //    echo "
      //  <script>
      //   alert('Data Gagal Diubah');
      //    window.location = '../form_jadwal.php';
      //  </script>
      //  ";
         
      }
   
					
	
	
 ?>