<?php 
  include_once("koneksi.php");
  session_start();
  $npsn = $_SESSION['npsn'];

  $nama_siswa   = $_POST['nama_siswa'];
  $sql_siswa    = mysqli_query($conn,"SELECT * FROM tb_siswa where nama_siswa ='$nama_siswa' and npsn='$npsn'");
  $data_siswa   = mysqli_fetch_array($sql_siswa);

  $nama_tagihan = $_POST['nama_tagihan'];
  $sql_tagihan  = mysqli_query($conn,"SELECT * FROM tb_tagihan where nama_tagihan ='$nama_tagihan' and npsn='$npsn'");
  $data_tagihan = mysqli_fetch_array($sql_tagihan);

          $id_tagihan         = $data_tagihan['id_tagihan'];
          $nipd               = $data_siswa['nipd'];
          $id_pembayaran      = $id_tagihan.$nipd;
          $nominal_tagihan    = $_POST['nominal_tagihan']; 
          $nominal_pembayaran = $_POST['nominal_pembayaran']; 
          $kode1              = str_replace('Rp.','',$nominal_tagihan);
          $kode12             = str_replace('.','',$kode1);
          $kode2              = str_replace('Rp.','',$nominal_pembayaran);
          $kode22             = str_replace('.','',$kode2);

          $hasil = $kode12 - $kode22;
          if($hasil == 0){

            $hasil = "Lunas";

          }
          elseif($hasil > 0){

            $hasil = $hasil;

          }
          else{
            
            $hasil = $hasil;
            
          }

          $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
          $keterangan         = $hasil;
					
         $sql =mysqli_query($conn,"insert into tb_pembayaran values ('$id_pembayaran','$id_tagihan','$nipd','$kode22','$tanggal_pembayaran','$keterangan','$npsn');");
								
								

					if($sql){

            
            echo "
            <script>
              alert('Data Berhasil Ditambahkan');
              window.location = '../data_administrasi.php';
            </script>
            ";
           
          }
          elseif(!$sql){

            

          }
	
	
 ?>


</body>
</html>
