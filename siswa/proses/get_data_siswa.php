<?php 

include_once("koneksi.php");

$queri = "SELECT * FROM tb_siswa as s join tb_kelas as k on s.id_kelas = k.id_kelas";
    
$result=$conn->query($queri);

while($row = $result->fetch_array(MYSQLI_ASSOC)){

    $data[] = $row;

}

$results = ["sEcho" => 1,
                    "iTotalRecord" => count($data),
                    "iTotalDisplayRecord"=> count($data),
                    "aaData"=> $data];

echo json_encode($results);

?>