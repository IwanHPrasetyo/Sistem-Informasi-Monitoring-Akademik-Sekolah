<?php 
  include_once("proses/koneksi.php");
  session_start();
  $nama_login = $_SESSION['nama_login'];
  
  //session_destroy();
  if($nama_login == ""){

    header("location:../");

  }
  
  

  $sql_profil_sekolah = mysqli_query($conn,"SELECT * FROM tb_sekolah");
  $profil_row = mysqli_fetch_array($sql_profil_sekolah);
  $sql_jumlah_guru = mysqli_query($conn,"SELECT  count(*) as jumlah from tb_karyawan");
  $jumlah_guru = mysqli_fetch_array($sql_jumlah_guru);
  $sql_jumlah_guru = mysqli_query($conn,"SELECT  count(*) as jumlah from tb_karyawan");
  $jumlah_guru = mysqli_fetch_array($sql_jumlah_guru);
  $sql_jumlah_siswa = mysqli_query($conn,"SELECT  count(*) as jumlah from tb_siswa");
  $jumlah_siswa = mysqli_fetch_array($sql_jumlah_siswa);

  $_SESSION['nama_sekolah'] = $nama_login;
  $_SESSION['foto']         = $_SESSION['data_foto'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Monitoring Akademik Siswa</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/mediaelementplayer.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/icheck/skins/flat/red.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="mimin" class="dashboard">
      <!-- start: Header -->
      <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                 <b>SISTEM INFORMASI MONITORING AKADEMIK SISWA</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav" style="margin-right:5%;">
                <li class="user-name"><span><?php echo $_SESSION['nama_sekolah'] ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../admin_sekolah/asset/foto/admin/<?php echo $_SESSION['foto']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href="lockscreen.php"><span class="fa fa-lock"></span></a></li>
                        <li><a href="../"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a href="index.php"><span class="fa-home fa"></span> Dashboard</a>
                    </li>
                    <li class="active ripple">
                      <a href="data_sekolah.php"><span class="fa-home fa"></span>Data Sekolah</a>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-graduation-cap"></span> Data Siswa  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_siswa.php">Data Induk Siswa</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-users"></span> Data Karyawan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_karyawan.php">Data Induk Karyawan</a></li>
                        <li><a href="data_guru.php">Data Guru</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Data Akademik  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_pelajaran.php">Data Mata Pelajaran</a></li>
                        <li><a href="data_jadwal.php">Data Jadwal</a></li>
                        <li><a href="data_kelas.php">Data Jurusan Kelas</a></li>
                        <li><a href="data_absensi.php">Data Absensi Siswa</a></li>
                        <li><a href="data_nilai_siswa.php">Data Nilai Siswa</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-money"></span> Data Administrasi  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_tagihan.php">Data Tagihan</a></li>
                        <li><a href="data_administrasi.php">Data Pembayaran Siswa</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-group (alias)"></span> Data Konseling  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_pelanggaran.php">Data Pelanggaran</a></li>
                        <li><a href="data_konseling.php">Data Table Konseling</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Pesan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="data_pesan_masuk.php">Pesan Masuk</a></li>
                        <li><a href="data_pesan.php">Data Pesan</a></li>
                      </ul>
                    </li>

                    
                    
                    <li><a href="tentang.php">Tentang Aplikasi</a></li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
          <div id="content" class="profile-v1">
             <div class="col-md-12 col-sm-12 profile-v1-wrapper">
                <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                    <div class="profile-v1-pp">
                      <img src="../admin_sekolah/asset/foto/admin/<?php echo $_SESSION['foto']; ?>"/>
                      <strong><h2><?php echo $_SESSION['nama_login']; ?></h2></strong>
                      
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="asset/img/latar.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1><?php echo $jumlah_guru['jumlah']; ?></h1>
                          <p>Pengajar</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1><?php echo $jumlah_guru['jumlah']; ?></h1>
                           <p>Staf</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1><?php echo $jumlah_siswa['jumlah']; ?></h1>
                          <p>Siswa</p>
                        </div>
                    </div>
                </div>
             </div>

             <form class="cmxform" method="POST" action="proses/tambah_informasi.php" enctype="multipart/form-data" >
             <div class="col-md-12 col-sm-12 profile-v1-body">
                <div class="col-md-7">
                   <div class="box-v5 panel">
                    <div class="panel-heading padding-0 bg-white border-none">
                        <textarea name="informasi" placeholder="informasi apa hari ini ?"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="col-md-12 padding-0">
                        <div class="col-md-6 col-sm-6 col-xs-6 tool">
                        <div class="input-group fileupload-v1">
                              <input type="file" name="image" id="idgambar" class="fileupload-v1-file hidden"/>
                              <input type="text" class="form-control fileupload-v1-path hidden" placeholder="File">
                              <span class="input-group-btn">
                                <button class="btn fileupload-v1-btn" type="button"><span class="fa fa-camera fa-2x"></span></button>
                              </span>
                        </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-0">
                        <img id="gambar" src="asset\img\tambah_picture.png" style="width:10%;"  class="form-text"/>
                          <input type="submit" class="btn btn-round pull-right btn-info" value="BAGIKAN">
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>

                  <?php 
                  
                      $sql2 = mysqli_query($conn,"SELECT * FROM tb_info_sekolah group by id desc ");
                      $folder = "";
                      while($row = mysqli_fetch_array($sql2)){

                      $npsn_foto = $row['npsn'];
                      $foto_pesan = mysqli_query($conn,"SELECT * FROM tb_sekolah where npsn='$npsn_foto'");
                      $foto_kirim = mysqli_fetch_array($foto_pesan); 
                  
                  ?>
                  
                    <div class="panel box-v7">
                        <div class="panel-body">
                          <div class="col-md-12 padding-0 box-v7-header">
                              <div class="col-md-12 padding-0">
                                  <div class="col-md-10 padding-0">
                                  <img src="../admin_sekolah/asset/foto/sekolah/<?php echo $foto_kirim['foto']; ?>" class="box-v7-avatar pull-left" />
                                  <h4><?php echo $foto_kirim['nama_sekolah']; ?></h4>
                                  <p><?php echo $row['tanggal']; ?></p>
                                  </div>
                                  <div class="col-md-2 padding-0">
                                    <div class="btn-group pull-right">
                                    <i class="icon-options-vertical icons box-v7-menu" data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu" role="menu">
                                    <li><a href="proses/hapus_informasi.php?id=<?php echo $row['id']; ?>">Hapus</a></li>
                                    </ul>
                                  </div>
                                  </div>
                              </div>
                          </div>
                         <div class="col-md-12 padding-0 box-v7-body">
                              
                              <?php
                              
                              if(empty($row['foto'])==true){

                                $folder="";
                              }
                              else{
                                $folder="asset/foto/informasi/";
                              }
                              
                              ?>

                              <p><?php echo $row['informasi']; ?><br><br>
                              <img src="<?php echo $folder.$row['foto'] ?>" class="img-thumbnail"/>

                              </p>
                          </div>
                        </div>
                    </div>

                <?php } ?>

                </div>

                <div class="col-md-5">
                     <div class="panel box-v3">
                                <div class="panel-heading bg-white border-none">
                                  <h4>Profil Sekolah</h4>
                                </div>
                                <div class="panel-body">
                                <center><div style="width:50%; height:50%;">
                                    <img src="asset/img/tutwuri.png?>" class="img-responsive">
                                </div></center>
                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-graduation icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">SISTEM INFROMASI MONITORING AKADEMIK</h5>
                                    </div>
                                  </div>

                                  <div class="media">
                                    <div class="media-left">
                                        <span class="icon-graduation icons" style="font-size:2em;"></span>
                                    </div>
                                    <div class="media-body">
                                      <h5 class="media-heading">2018</h5>
                                    </div>
                                  </div>

                                  
                </div>
             </div>
           
          </div>
          <!-- end: content -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                <li class="active ripple">
                <a href="index.php"><span class="fa-home fa"></span> Dashboard</a>
              </li>
              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-graduation-cap"></span> Data Siswa  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_siswa.php">Data Induk Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-users"></span> Data Karyawan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_karyawan.php">Data Induk Karyawan</a></li>
                  <li><a href="data_guru.php">Data Guru</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-pencil"></span> Data Akademik  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelajaran.php">Data Mata Pelajaran</a></li>
                  <li><a href="data_jadwal.php">Data Jadwal</a></li>
                  <li><a href="data_kelas.php">Data Jurusan Kelas</a></li>
                  <li><a href="data_absensi.php">Data Absensi Siswa</a></li>
                  <li><a href="data_nilai_siswa.php">Data Nilai Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-money"></span> Data Administrasi  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_tagihan.php">Data Tagihan</a></li>
                  <li><a href="data_administrasi.php">Data Pembayaran Siswa</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-group (alias)"></span> Data Konseling  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pelanggaran.php">Data Pelanggaran</a></li>
                  <li><a href="data_konseling.php">Data Table Konseling</a></li>
                </ul>
              </li>

              <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Pesan  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="data_pesan_masuk.php">Pesan Masuk</a></li>
                  <li><a href="data_pesan.php">Data Pesan</a></li>
                </ul>
              </li>
              <li><a href="tentang.php">Tentang Aplikasi</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/icheck.min.js"></script>
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/mediaelement-and-player.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
   $('video,audio').mediaelementplayer({
            alwaysShowControls: true,
            videoVolume: 'vertical',
            features: ['playpause','progress','volume','fullscreen']
          });
 });


 function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload =function (e) {
                        $('#gambar').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            
                $('#idgambar').change(function(){
                readURL(this);
            });


</script>
<!-- end: Javascript -->
</body>
</html>