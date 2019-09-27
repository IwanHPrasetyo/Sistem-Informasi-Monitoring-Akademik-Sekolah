<?php
session_start();
$nspn = $_SESSION['npsn'];
$link = mysqli_connect("localhost", "root", "", "sismo_smkit");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM tb_siswa WHERE nama_siswa LIKE '" . $term . "%' and npsn ='$nspn' ";
    $sql2 = "SELECT * FROM tb_karyawan WHERE nama_karyawan LIKE '" . $term . "%' and npsn ='$nspn' ";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['nama_siswa'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);

        } else{

            if($result = mysqli_query($link, $sql2)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<p>" . $row['nama_karyawan'] . "</p>";
                    }
                    // Close result set
                    mysqli_free_result($result);
        
                } else{
        
                    echo "Data Tidak Ditemukan";
                    
                }
            }
            
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>