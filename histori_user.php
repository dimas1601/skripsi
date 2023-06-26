<?php
// error_reporting(0);
// session_start();
include 'db.php';
// if($_SESSION['status_login'] != true){
// 	echo '<script>window.location="login.php"</script>';
// }
// $user=mysqli_query($conn,"SELECT * FROM data_user where id ='".$_SESSION['id_user']."'");
// $data_user=mysqli_fetch_object($user);

$SqlPeriode="";
$awalTgl="";
$akhirTgl="";
$tglAwal="";        
$tglAkhir="";
if(isset($_POST['btnTampil'])){
	$tglAwal=isset($_POST['txtTglAwal']) ? ($_POST['txtTglAwal']):"01-".date('m-Y');
	$tglAkhir=isset($_POST['txtTglAkhir']) ? ($_POST['txtTglAkhir']):date('d-m-Y');

	$SqlPeriode="WHERE A.waktu BETWEEN '".$tglAwal."' AND '".$tglAkhir."'";
}else{
	$awalTgl= "01-".date('m-Y');
	$akhirTgl= date('d-m-Y');
	
	$SqlPeriode="WHERE A.waktu BETWEEN '".$awalTgl."' AND '".$akhirTgl."'";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Data Kandang</title>
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- icon google -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link rel="stylesheet" href="assets/style.css">
	<!-- buat grafik -->
    <script type="text/javascript" src="assets/js/jquery-3.4.0.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="jquery-latest.js"></script>
	<!-- tabel data user -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> 
  <!-- javascript tabel data user-->
     <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="assets/js/data-user.js"></script> 
    <!-- memanggil data_user grafik -->
    <script type="text/javascript">
        var refreshid = setInterval(function(){
            // buat update data biar realtime
            $('#responsecontainer').load('data.php');
            $('#data_sensor').load('klasifikasi.php');
        },1000//waktu 0 detik data ter update//
        );
    </script>
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand" style="">
            
			<i class='bx bxs-smile'></i>
			<span class="text">Ayam&nbsp&nbspBroiler</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="histori_user.php">
                    <i class='bx bx-history'></i>
					<span class="text">History</span>
				</a>
			</li>
			<li>
				<a href="profil_user.php">
                    <i class='bx bx-user' ></i>
					<span class="text">Profil</span>
				</a>
			</li>
			<li>
				<a href="#">
                    <i class='bx bx-log-out'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			
			<div class="nav-right">
				<input type="checkbox" id="switch-mode" hidden>
				<label for="switch-mode" class="switch-mode"></label>
				<a href="#" class="profile">
					<img src="assets/img/yusuf.jpg">
				</a>
			</div>
			
		</nav>
		<!-- NAVBAR -->

		
		<!-- MAIN -->
		<main>
		<div class="tabel">
                <center><h5 style="margin-top:10px;"><b>Tabel Data Uji</b></h5></center>
                <h4 style="font-size:18px">Data Uji Tanggal <b><?php echo $tglAwal ?></b>  s/d  <b><?php echo $tglAkhir ?></b></h4>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="form10" target="_SELF">
                    <div class="row" style="margin-bottom:20px;margin-top:20px">
                        <div class="col-lg-3">
                            <input type="date" style="margin-top:10px" name="txtTglAwal" class="form-control" value="<?php echo $awalTgl ?>" size="10">
                        </div>
                        <div class="col-lg-3">
                            <input type="date" style="margin-top:10px"name="txtTglAkhir" class="form-control" value="<?php echo $akhirTgl ?>" size="10">
                        </div>
                        <div class="col-lg-3">
                            <input type="submit" style="margin-top:10px" name="btnTampil" class="btn btn-success" value="Tampilkan">
                        </div>  
                    </div>
                 
                </form>
                <table id="example" class="table table-striped" style="width:100%;">
                <thead>
                    <tr >
                        <th class="text-center">No</th>
                        <th class="text-center">Suhu</th>
                        <th class="text-center">Kelembaban</th>
                        <th class="text-center">Amonia</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                     $uji=mysqli_query($conn,"SELECT A.* FROM data_uji A $SqlPeriode");
                    $no=1;
                        while($data_uji=mysqli_fetch_array($uji)){
                    ?>
                        <tr class="align-middle">
                            <td><?php echo $no ?></td>
                            <td ><?php echo $data_uji['suhu'] ?></td>
                            <td><?php echo $data_uji['kelembaban'] ?></td>
                            <td><?php echo $data_uji['amonia'] ?></td>
                            <td><?php echo $data_uji['kelas'] ?></td>
                            <td><?php echo $data_uji['waktu'] ?></td>
                        </tr>
                    <?php
                    $no++;
                        }
                    ?>
                    </tbody>
                </table>
                <?php
                    if(mysqli_num_rows($uji)>0){?>
                        <center><a href="histori-excel.php?awal=<?php echo $tglAwal ?>&akhir=<?php echo $tglAkhir ?>"><button class="btn btn-primary" style="margin :20px">Export Excel</button></a></center>
 <?php }?>                
            </div>
			

			
			

		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	
    <script src="assets/js/script.js"></script>
</body>
</html>