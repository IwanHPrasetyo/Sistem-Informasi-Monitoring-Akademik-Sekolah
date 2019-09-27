<?php 
    session_start();

    $npsn = $_SESSION['npsn'];
    
	include_once("koneksi.php");

                $id	= $_GET['id'];
                $keterangan = $_POST['keterangan'];
					
                $sql = mysqli_query($conn,"update tb_absensi set keterangan = '$keterangan' WHERE kode_absensi = '$id' and npsn = '$npsn'")or die(mysqli_error());
									
				if($sql){

                    echo "
                    <script>
                      alert('Data Berhasil Dubah');
                      window.location = '../data_absensi.php';
                    </script>
                    ";
                }	

                else{

                    echo "
                    <script>
                      alert('Data Gagal Disimpan');
                      window.location = '../data_absensi.php';
                    </script>
                    ";

                }
	
	
 ?>