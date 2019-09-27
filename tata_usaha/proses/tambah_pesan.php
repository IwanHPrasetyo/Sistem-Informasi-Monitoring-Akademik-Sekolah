<?php 
	include_once("koneksi.php");
  session_start();
  


					$nama_tujuan       = $_POST['nama_tujuan'];
					$pesan             = $_POST['pesan'];
          $tanggal           = date('m/d/y h:i:s');
          $kode1             = $tanggal;
          $kode2             = str_replace('/','',$kode1);
          $kode3             = str_replace(':','',$kode2);
          $id_pesan          = str_replace(' ','',$kode3);
          $npsn              = $_SESSION['npsn'];
          

          //$sql_siswa    = mysqli_query($conn,"SELECT * FROM tb_siswa where nama_siswa='$nama_tujuan'");
          //$sql_karyawan = mysqli_query($conn,"SELECT * FROM tb_karyawan where nama_karyawan='$nama_tujuan'");

          //if(mysqli_fetch_row($sql_siswa) > 0){

            //$sql_siswa    = mysqli_query($conn,"SELECT * FROM tb_siswa where nama_siswa='$nama_tujuan'");
            //$data_siswa = mysqli_fetch_array($sql_siswa);
            $pengirim  = $_SESSION['nama_login'];
            $peneriman = $_POST['nama_tujuan'];

            $sql_tambah = mysqli_query($conn,"insert into tb_pesan values('$id_pesan','$pengirim','$peneriman','$pesan','$tanggal','$npsn'); ");

            if($sql_tambah){

              echo "
              <script>
                alert('Pesan Berhasil Dikirim');
                window.location = '../baca_pesan.php';
              </script>
              ";

            }

          //}
          //elseif(mysqli_fetch_row($sql_karyawan) > 0){

            //$sql_karyawan = mysqli_query($conn,"SELECT * FROM tb_karyawan where nama_karyawan='$nama_tujuan'");
            //$data_karyawan = mysqli_fetch_array($sql_karyawan);

            //$pengirim  = "17433";
            //$peneriman = $data_karyawan['kode_guru'];

            //$sql_tambah = mysqli_query($conn,"insert into tb_pesan values('$id_pesan','$pengirim','$peneriman','$pesan','$tanggal','$npsn'); ");


            //echo "
            //<script>
              //alert('Pesan Berhasil Dikirim');
              //window.location = '../data_pesan.php';
            //</script>
            //";

          //}
          else{

            echo"<script>
              alert('Pesan Gagal Dikirim');
              window.location = '../form_pesan.php';
            </script>
            ";

          }
						
 ?>