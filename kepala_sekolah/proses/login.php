<?php 
include_once("koneksi.php");
session_start();
session_unset();
session_destroy();
session_start();

$kode          = $_POST['no_id'];
$password      = md5($_POST['password']);



$sql_admin   =mysqli_query($conn,"SELECT * from tb_admin where nama_admin ='$kode' and password ='$password'");

$sql_sekolah = mysqli_query($conn,"SELECT * from tb_sekolah where npsn ='$kode' and password='$password'");

$sql_wali   =mysqli_query($conn,"SELECT * from tb_siswa where nipd ='$kode' and password_wali ='$password'");

$sql_karyawan = mysqli_query($conn,"SELECT * from tb_karyawan where kode_guru = '$kode' and password = '$password'");
$data_karyawan=mysqli_fetch_array($sql_karyawan) ;



//$level = $data_karyawan['status_kepegawaian'];


    if($data_sekolah = mysqli_fetch_array($sql_sekolah )){

        $_SESSION['npsn'] = $kode;
        $_SESSION['nama_login'] = $data_sekolah['nama_sekolah'];
        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../';
        </script>
        ";


    }

    elseif($data_karyawan['status_kepegawaian'] == "Kepala Sekolah"){

        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../../kepala_sekolah';
        </script>
        ";

    }
    elseif($data_karyawan['status_kepegawaian'] == "BK"){
        
        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../../bk/';
        </script>
        ";

        echo "ok1";
        
            }
    elseif($data_karyawan['status_kepegawaian'] == "Tata Usaha"){
                
        $_SESSION['kode_guru'] = $kode;
        $_SESSION['nama_login'] = $data_karyawan['nama_karyawan'];
        $_SESSION['npsn']  = $data_karyawan['npsn'];

        echo "
        <script>
          alert('Login Berhasil');
          window.location = '../../tata_usaha/';
        </script>
        ";
                
          }

    elseif( $data_siswa = mysqli_fetch_array($sql_wali)){

                    $_SESSION['npsn'] = $data_siswa['npsn'];
                    $_SESSION['nama_login'] = $data_siswa['nama_siswa'];
                    $_SESSION['npsn']  = $data_siswa['npsn'];
            
                    header("location:../../wali_murid/");
            
      }

      elseif( $data_admin = mysqli_fetch_array($sql_admin)){
        
                            //$_SESSION['npsn'] = $data_admin['npsn'];
                            $_SESSION['nama_login'] = $data_admin['nama_admin'];
                            $_SESSION['data_foto']  = $data_admin['foto'];
                    
                            header("location:../../admin_utama/");
                    
              }

    else{
        echo "
        <script>
          alert('Login Gagal User Belum Terdaftar');
          window.location = '../../';
        </script>
        ";
    }

    



?>