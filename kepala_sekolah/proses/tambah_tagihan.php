<?php 
  include_once("koneksi.php");
  session_start();

  $npsn = $_SESSION["npsn"];


          $id                = $_SESSION['npsn'];
          $tanggal           = date('m/d/y h:i:s');
          $kode1             = $id.$tanggal;
          $kode2             = str_replace('/','',$kode1);
          $kode3             = str_replace(':','',$kode2);
          $kode4             = str_replace(' ','',$kode3);
          $kode_informasi    = "SP".$kode4;
					$id_tagihan        = $kode_informasi;
          $nama_tagihan      = $_POST['nama_tagihan'];
          
          $nominal1          = $_POST['nominal_tagihan'];
          $nominal2          = str_replace('Rp.','',$nominal1);
          $nominal3          = str_replace('.','',$nominal2);
          $nominal_tagihan   = $nominal3;
          $keterangan        = $_POST['keterangan'];
          $tanggal_terbit    = $_POST['tanggal_terbit'];
          $tanggal_akhir     = $_POST['tanggal_akhir'];
          

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

          
					
					$sql_siswa = mysqli_query($conn,"SELECT * FROM tb_siswa where id_kelas = '$kodeKLS' and npsn ='$npsn'")or die(mysqli_error());
					
         $sql =mysqli_query($conn,"insert into tb_tagihan values ('$id_tagihan','$nama_tagihan','$nominal_tagihan','$kodeKLS','$keterangan','$tanggal_terbit','$tanggal_akhir','$npsn');")
         or die(mysqli_error());
          
         
         while($data_siswa = mysqli_fetch_array($sql_siswa)){
          $nipd               = $data_siswa['nipd'];
          $id_pembayaran      = $id_tagihan.$nipd;

            $sql_pembayaran = mysqli_query($conn,"INSERT into tb_pembayaran values ('$id_pembayaran','$id_tagihan','$nipd','','','$nominal_tagihan','$npsn');")or die(mysqli_error());

         }
								

					if($sql && $sql_pembayaran){

            echo "
            <script>
              alert('Data Berhasil Ditambahkan');
              window.location = '../data_tagihan.php';
            </script>
            ";

          }
          else{

            echo "
            <script>
              alert('Data Gagal Ditambahkan');
              window.location = '../form_tagihan.php';
            </script>
            ";

          }
	
	
 ?>