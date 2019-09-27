<?php 
  include_once("koneksi.php");
  session_start();

          $tanggal                = date('m/d/y h:i:s');
          $kode1                  = $tanggal;
          $kode2                  = str_replace('/','',$kode1);
          $kode3                  = str_replace(':','',$kode2);
          $kode_informasi         = str_replace(' ','',$kode3);
          $nama_siswa             = $_POST['nama_siswa'];
          $kode_guru              = 'P1';
          $nama_pelanggaran       = $_POST['nama_pelanggaran'];
          
          $sql = mysqli_query($conn,"SELECT * FROM tb_pelanggaran where nama_pelanggaran = 'Mencuri/merampas barang milik orang lain'");
          $row = mysqli_fetch_array($sql);
          $kode = $row['kode_pelanggaran'];

          $sql2 = mysqli_query($conn,"SELECT * FROM tb_siswa where nama_siswa = '$nama_siswa'");
          $row2 = mysqli_fetch_array($sql2);
          $nipd = $row2['nipd'];

          $keterangan             = $_POST['keterangan'];
          $npsn                   = $_SESSION['npsn'];
          $id_konseling           = $kode.$nipd.$kode_informasi;
					

   
         $sql =mysqli_query($conn,"INSERT into tb_konseling values('$id_konseling','$nipd' ,'$kode_guru','$kode' ,'$keterangan','$tanggal','$npsn')")
         or die(mysqli_error());
  
      if($sql){
        echo "
        <script>
          alert('Data Berhasil Ditambah');
          window.location = '../data_konseling.php';
        </script>
        ";


      }else{
        echo "
        <script>
          alert('Data Gagal Ditambah');
          window.location = '../form_konseling.php';
        </script>
        ";
         
      }
   
					
	
	
 ?>