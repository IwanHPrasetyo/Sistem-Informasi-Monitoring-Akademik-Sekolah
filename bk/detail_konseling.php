<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Monitoring</title>

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
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
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
                      <img src="asset/img/avatar.jpg"/>
                      <h2>Akihiko Avaron</h2>
                      <a href="form_data_siswa.php" ><input type="button" class="btn btn-danger" value="Edit" /></a>
                    </div>
                    <div class="col-md-12 profile-v1-cover">
                      <img src="asset/img/bg1.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                      <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">
                          <h1>51K</h1>
                          <p>Followers</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">
                           <h1>609</h1>
                           <p>Following</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                        <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                          <h1>82001</h1>
                          <p>Post</p>
                        </div>
                    </div>
                </div>
             </div>




 <div class="col-md-12">
                  <div class="col-md-12">
                    <div class="col-md-12 tabs-area">
                      <div class="liner"></div>
                      <ul class="nav nav-tabs nav-tabs-v5" id="tabs-demo6">
                        <li class="active">
                         <a href="#tabs-demo6-area1" data-toggle="tab" title="Profil">
                          <span class="round-tabs one">
                            <i class="icons icon-emotsmile"></i>
                          </span> 
                        </a>
                      </li>

                      <li>
                        <a href="#tabs-demo6-area2" data-toggle="tab" title="Akademik">
                         <span class="round-tabs two">
                           <i class="fa fa-graduation-cap"></i>
                         </span> 
                       </a>
                     </li>

                     <li>
                      <a href="#tabs-demo6-area3" data-toggle="tab" title="Pelanggaran">
                       <span class="round-tabs three">
                        <i class="fa fa-gavel"></i>
                      </span> </a>
                    </li>

                    <li>
                      <a href="#tabs-demo6-area4" data-toggle="tab" title="Administrasi">
                       <span class="round-tabs four">
                         <i class="fa fa-money"></i>
                       </span> 
                     </a>
                   </li>

                   <li><a href="#tabs-demo6-area5" data-toggle="tab" title="Pesan">
                     <span class="round-tabs five">
                      <i class="glyphicon glyphicon-ok"></i>
                    </span> </a>
                  </li>
                </ul>
                <div class="tab-content tab-content-v5">
                  <div class="tab-pane fade in active" id="tabs-demo6-area1">

                    <h3 class="head text-center">Profil Siswa<sup>™</sup> <span style="color:#f48250;">♥</span></h3>
                    
                    <div class="col-md-12">
                     
                          
                    <div class="panel">
                    <div class="panel-heading-white panel-heading">
                       <h4>Radar Chart</h4>
                     </div>
                     <div class="panel-body">
                        <canvas class="radar-chart"></canvas>
                     </div>
               </div>

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th bgcolor="#73caef"><center>Data</center></th>
                        <th bgcolor="#73caef"><center>Keterangan</center></th>
                       

                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                    
                    include_once("proses/koneksi.php");

					if($conn->connect_error){
						die('Connection Error :'.$conn->connect_error);
					}
					$sql = mysqli_query($conn,"SELECT * FROM tb_siswa as s join tb_kelas as k  on s.id_kelas = k.id_kelas join tb_jurusan as j on s.id_jurusan = j.id_jurusan");

                	$data = mysqli_fetch_array($sql);
					 
               echo"  <tr>
                        <td><span class='fa fa-asterisk' style ='margin-right:10%;'></span>ID</td>
                        <td>".$data['id']."</td> 	
                      </tr>
                     
                      <tr>
                        <td><span class='fa fa-odnoklassniki-square' style ='margin-right:10%;'></span>NISN</td>
                        <td>".$data['nisn']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-odnoklassniki' style ='margin-right:10%;'></span>NIS</td>
                        <td>".$data['nis']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-smile-o' style ='margin-right:10%;'></span>Nama</td>
                        <td>".$data['nama']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-intersex' style ='margin-right:10%;'></span>Jenis Kelamin</td>
                        <td>".$data['jk']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-bed' style ='margin-right:10%;'></span>Tempat Lahir</td>
                        <td>".$data['tmp_lahir']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-calendar-check-o' style ='margin-right:10%;'></span>Tanggal Lhir</td>
                        <td>".$data['tgl_lahir']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-tty' style ='margin-right:10%;'></span>Telfon</td>
                        <td>".$data['telefon']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-moon-o' style ='margin-right:10%;'></span>Agama</td>
                        <td>".$data['agama']."<td>
                        
                      <tr>
                        <td><span class='fa-home fa' style ='margin-right:10%;'></span>Alamat</td>
                        <td>".$data['alamat']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-flag' style ='margin-right:10%;'></span>Kewarganegaraan</td>
                        <td>".$data['negara']."</td> 	
                      </tr>
                     
                      <tr>
                        <td><span class='fa fa-male' style ='margin-right:10%;'></span>Nama Ayah</td>
                        <td>".$data['nama_ayah']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Ayah</td>
                        <td>".$data['pekerjaan_ayah']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-female' style ='margin-right:10%;'></span>Nama Ibu</td>
                        <td>".$data['nama_ibu']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Ibu</td>
                        <td>".$data['pekerjaan_ibu']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-users' style ='margin-right:10%;'></span>Nama Wali</td>
                        <td>".$data['nama_wali']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-suitcase' style ='margin-right:10%;'></span>Pekerjaan Wali</td>
                        <td>".$data['pekerjaan_wali']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-child' style ='margin-right:10%;'></span>Anak ke</td>
                        <td>".$data['anak_ke']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-university' style ='margin-right:10%;'></span>Kelas</td>
                        <td>".$data['nama_kelas']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-book' style ='margin-right:10%;'></span>Jurusan</td>
                        <td>".$data['nama_jurusan']."</td> 	
                      </tr>

                      <tr>
                        <td><span class='fa fa-building' style ='margin-right:10%;'></span>Asal Sekolah</td>
                        <td>".$data['asal_sekolah']."</td> 	
                      </tr>

					";?>
                    </tbody>
                  </table>

                  <div class="col-md-12">
                              
                              <center><a href="form_data_siswa.php">
                              <input class="btn btn-round btn-primary" type="submit" value="Edit Data Siswa"></a>
                              </center>
                        </div>

                  </div>

                    </div>

                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area2">
                    <h3 class="head text-center">Create a Mimin<sup>™</sup> Profile</h3>
                    
                    <div class="col-md-12">
                     
                          
                        	<div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img src="asset/img/avatar.jpg" style="width:20%;"  class="form-text"/></center>	
                            </div>

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><center>NISN</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jenis Kelamin</center></th>
                        <th><center>Tempat Lahir</center></th>
                        <th><center>Tanggal Lahir</center></th>
                        <th><center>Telefon</center></th>
                        <th><center>Kewarganegaraan<center></th>
                        <th><center>Anak ke</center></th>
                        <th><center>Satus Siswa</center></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>	
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>	
                      </tr>
                     
                    </tbody>
                  </table>

                  <div class="col-md-12">
                              
                              <center><a href="form_data_siswa.php">
                              <input class="btn btn-round btn-primary" type="submit" value="Edit Data Siswa"></a>
                              </center>
                        </div>

                  </div>

                    </div>

                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area3">
                    <h3 class="head text-center">Mimin goodies</h3>
                    <div class="col-md-12">
                     
                          
                        	<div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img src="asset/img/avatar.jpg" style="width:20%;"  class="form-text"/></center>	
                            </div>

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><center>NISN</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jenis Kelamin</center></th>
                        <th><center>Tempat Lahir</center></th>
                        <th><center>Tanggal Lahir</center></th>
                        <th><center>Telefon</center></th>
                        <th><center>Kewarganegaraan<center></th>
                        <th><center>Anak ke</center></th>
                        <th><center>Satus Siswa</center></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>	
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>	
                      </tr>
                     
                    </tbody>
                  </table>

                  <div class="col-md-12">
                              
                              <center><a href="form_data_siswa.php">
                              <input class="btn btn-round btn-primary" type="submit" value="Edit Data Siswa"></a>
                              </center>
                        </div>

                  </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area4">
                    <h3 class="head text-center">Drop comments!</h3>
                   <div class="col-md-12">
                     
                          
                        	<div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img src="asset/img/avatar.jpg" style="width:20%;"  class="form-text"/></center>	
                            </div>

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><center>NISN</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jenis Kelamin</center></th>
                        <th><center>Tempat Lahir</center></th>
                        <th><center>Tanggal Lahir</center></th>
                        <th><center>Telefon</center></th>
                        <th><center>Kewarganegaraan<center></th>
                        <th><center>Anak ke</center></th>
                        <th><center>Satus Siswa</center></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>	
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>	
                      </tr>
                     
                    </tbody>
                  </table>

                  <div class="col-md-12">
                              
                              <center><a href="form_data_siswa.php">
                              <input class="btn btn-round btn-primary" type="submit" value="Edit Data Siswa"></a>
                              </center>
                        </div>

                  </div>

                    </div>
                  </div>
                  <div class="tab-pane fade" id="tabs-demo6-area5">
                    <div class="text-center">
                      <i class="img-intro icon-checkmark-circle"></i>
                    </div>
                    <h3 class="head text-center">thanks for staying tuned! <span style="color:#f48250;">♥</span> Bootstrap</h3>
                    <div class="col-md-12">
                     
                          
                        	<div class="form-group form-animate-text" style="margin-top:40px !important;">
                            	<center><img src="asset/img/avatar.jpg" style="width:20%;"  class="form-text"/></center>	
                            </div>

                    <div class="responsive-table">
                      
                    <table class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th><center>NISN</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>Jenis Kelamin</center></th>
                        <th><center>Tempat Lahir</center></th>
                        <th><center>Tanggal Lahir</center></th>
                        <th><center>Telefon</center></th>
                        <th><center>Kewarganegaraan<center></th>
                        <th><center>Anak ke</center></th>
                        <th><center>Satus Siswa</center></th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>	
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>	
                      </tr>
                     
                    </tbody>
                  </table>

                  <div class="col-md-12">
                              
                              <center><a href="form_data_siswa.php">
                              <input class="btn btn-round btn-primary" type="submit" value="Edit Data Siswa"></a>
                              </center>
                        </div>

                  </div>

                    </div>
                  </div>
                  <div class="clearfix"></div>
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
</script>
<!-- end: Javascript -->
</body>
</html>