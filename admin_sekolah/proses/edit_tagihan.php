<?php 
  include_once("koneksi.php");
  session_start();


		      $id_tagihan        = $_GET['id'];

		      $nama_tagihan      = $_POST['nama_tagihan'];
          $nominal1          = $_POST['nominal_tagihan'];
          $nominal2          = str_replace('Rp.','',$nominal1);
          $nominal3          = str_replace('.','',$nominal2);
          $nominal_tagihan   = $nominal3;

          $keterangan        = $_POST['keterangan'];
          $tanggal_terbit    = $_POST['tanggal_terbit'];
          $tanggal_akhir     = $_POST['tanggal_akhir'];
          $npsn              = $_SESSION['npsn'];
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
					
					
					
         $sql =mysqli_query($conn,"update tb_tagihan set nama_tagihan = '$nama_tagihan', nominal_tagihan='$nominal_tagihan', id_kelas='$kodeKLS',keterangan='$keterangan',tanggal_terbit='$tanggal_terbit',tanggal_akhir='$tanggal_akhir' where id_tagihan='$id_tagihan' and npsn='$npsn'")
         or die(mysqli_error());
								
							
					if($sql){

            echo "
            <script>
              alert('Data Berhasil diubah');
              window.location = '../data_tagihan.php';
            </script>
            ";

          }
          else{

            echo "
            <script>
              alert('Data Gagal diubah');
              window.location = '../data_tagihan.php';
            </script>
            ";

          }
	
	
 ?>