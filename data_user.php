
<?php
include "db.php";
$user = mysqli_query($conn,"SELECT * FROM data_user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- icon google -->
	<link rel="stylesheet" href="assets/style.css">
	<!-- tabel data user -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> 
  <!-- javascript tabel data user-->
     <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="assets/js/data-user.js"></script> 
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
		<a href="assets/img/f.jpg" target="_blank"class="brand" style="">
            <img src="assets/img/f.jpg">
			<span class="text">Ayam&nbsp&nbspBroiler</span>
		</a>
		<ul class="side-menu top">
			<li >
				<a href="index_admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="histori_admin.php">
                    <i class='bx bx-history'></i>
					<span class="text">History</span>
				</a>
			</li>
			<li class="active">
				<a href="data_user.php">
                <i class='bx bxs-user-detail'></i>
					<span class="text">Data User</span>
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
			
			<b>Admin</b>
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
			<!-- TABEL DATA USER -->
            <div class="tabel">
                <center><h5 style="margin-top:10px;"><b>Tabel Data User</b></h5></center>
                <table id="example" class="table table-striped" style="width:100%">
                <a href="tambah_user.php"><button type="button" class="btn btn-success" style="margin-bottom:20px">Tambah</button></a>
                <thead>
                    <tr >
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">No Hp</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $no=1;
                        while($data_user=mysqli_fetch_array($user)){
                    ?>
                        <tr class="align-middle">
                            <td><?php echo $no ?></td>
                            <td ><?php echo ucwords(strtolower($data_user['nama_depan']))." ".ucwords(strtolower($data_user['nama_belakang'])) ?></td>
                            <td><?php echo $data_user['email'] ?></td>
                            <td><?php echo $data_user['password'] ?></td>
                            <td><?php echo $data_user['no_hp'] ?></td>
                            <td><?php echo $data_user['alamat'] ?></td>
                            <td><a href="assets/foto/<?php echo $data_user['foto'] ?>" target="_blank"><img src="assets/foto/<?php echo $data_user['foto'] ?>" alt="" style="object-fit: cover;width:100px;height:100px;border-radius:10px"></a></td>
                            <td><button class="btn btn-sm btn-warning" style="width:60px"><b>Edit</b></button> || <a href="hapus.php?id_user=<?php echo $data_user['id']?>" onclick="return confirm('Yakin Hapus?')"><button style="width:60px" class="btn btn-sm btn-danger"><b>Hapus</b></button></a></td>
                        </tr>
                    <?php
                    $no++;
                        }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- TUTUP TABEL DATA USER -->
			

		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	
    <script src="assets/js/script.js"></script>
</body>
</html>