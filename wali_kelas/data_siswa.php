<?php 
session_start();
$npsn=$_SESSION['npsn'];
?>
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
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
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
                 <b>SIMON</b>
                </a>
              <ul class="nav navbar-nav navbar-right user-nav" style="margin-right:5%;">
                <li class="user-name"><span><?php echo $_SESSION['nama_sekolah']; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="../admin_sekolah/asset/foto/guru/<?php echo $_SESSION['foto']; ?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
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
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Induk Siswa</h3>
                        <p class="animated fadeInDown">
                          Data Siswa <span class="fa-angle-right fa"></span> Data Induk Siswa
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Induk Siswa</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                     
                        <tr>
                          <th>NIPD</th>
                          <th>NISN</th>
                          <th>Nama</th>
                          <th>Kelas</th>
                          <th>Jurusan</th>
                          <th>Status</th>
                          <th>Lihat</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                    
                    include_once("proses/koneksi.php");

					
					$sql =mysqli_query($conn,"SELECT * FROM tb_siswa as s join tb_kelas as k  on s.id_kelas = k.id_kelas join tb_jurusan as j on s.id_jurusan = j.id_jurusan where s.npsn = '$npsn'");
					
					while($row = mysqli_fetch_array($sql)){

					 ?>
					 <tr>
					 	<td><?php echo $row['nipd'];?>
                         </td>
                         <td><?php echo $row['nisn'];?>
                         </td>
                         <td><?php echo $row['nama_siswa'];?>
                         </td>
                         <td><?php echo $row['nama_kelas'];?>
					 	</td>
					 	<td><?php echo $row['nama_jurusan'];?>
					 	</td>
					 	<td><?php echo $row['status_sekolah'];?>
					 	</td>
					 	<td>
             <center><a  href="profile.php?id=<?php echo $row['nipd']; ?>"><input type="submit" class="btn btn-round btn-info" value="Lihat"></a></center>
					 	</td>
					 	
					 </tr>
					 <?php
					}
					?>
					                      </tbody>
                        </table>
                      </div>
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
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->

<script type="text/javascript">
$(document).ready(function(){
	$(document).on('click','#getUser', function(e){
		e.preventDefault();
		var uid = $(this).data('id');
		$('#dynamic-content').hide();

		$.ajax({
			type:'POST',
			url:'submit2.php',
			data:{id:uid},
			dataType:'json'
		}).done(function(data){
			console.log(data);
			$('#dynamic-content').show(); // show dynamic div
			$('#txt_fname').html(data.fname);
			$('#txt_lname').html(data.lname);
			$('#txt_email').html(data.email);
			$('#txt_position').html(data.phone);
		}).fail(function(){

			$('.modal-body').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
		});
	});
});
</script>

</body>
</html>