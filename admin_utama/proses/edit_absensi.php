<?php 
    session_start();
    $npsn = $_SESSION['npsn'];
    include_once("koneksi.php");

                    $keterangan = $_POST['keterangan'];
                    $sql = mysqli_query($conn,"SELECT * FROM tb_absensi as a join tb_pelajaran as p on a.kode_mapel = p.kode_mapel join tb_sekolah as s on a.npsn = s.npsn join tb_siswa as si on a.nipd = si.nipd where keterangan ='' and a.npsn='$npsn'");
                
                    

                    for ($i = 0; $i < count($keterangan) && $sql_data = mysqli_fetch_array($sql); $i++){

                            $kode_absensi = $sql_data['kode_absensi']; 
                            //echo $kode_absensi;
                            //echo $keterangan[$i];                        
                            $sql_insert =mysqli_query($conn,"update tb_absensi set keterangan = '$keterangan[$i]' WHERE kode_absensi = '$kode_absensi'");
                    }

   
				if($sql_insert){

                    echo "
                    <script>
                      alert('Data Berhasil Disimpan');
                      window.location = '../data_absensi.php';
                    </script>
                    ";
                }	

                else{

                    echo "
                    <script>
                      alert('Data Gagal Disimpan');
                      window.location = '../form_absensi.php';
                    </script>
                    ";

                }
	
	
 ?>