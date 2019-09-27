<?php 
	include_once("koneksi.php");

  $nama_siswa   = $_POST['nama_siswa'];
  $sql_siswa    = mysqli_query($conn,"SELECT * FROM tb_siswa where nama_siswa ='$nama_siswa'");
  $data_siswa   = mysqli_fetch_array($sql_siswa);

  $nama_tagihan = $_POST['nama_tagihan'];
  $sql_tagihan  = mysqli_query($conn,"SELECT * FROM tb_tagihan where nama_tagihan ='$nama_tagihan'");
  $data_tagihan = mysqli_fetch_array($sql_tagihan);

          $id_tagihan         = $data_tagihan['id_tagihan'];
          $nipd               = $data_siswa['nipd'];
          $id_pembayaran      = $_GET['id'];
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
					
         $sql =mysqli_query($conn,"UPDATE tb_pembayaran set id_tagihan='$id_tagihan', nipd='$nipd',nominal_pembayaran='$kode22',tanggal_pembayaran='$tanggal_pembayaran',keterangan_bayar='$keterangan' where id_pembayaran='$id_pembayaran'");
								
								

					if($sql){

            echo "
            <script>
              alert('Data Berhasil Ubah');
              window.location = '../data_administrasi.php';
            </script>
            ";
          }
          elseif(!$sql){

            echo "
            <script>
              alert('Data Gagal Ubah');
              window.location = '../form_pembayaran.php';
            </script>
            ";
            
          }
	
	
 ?>
