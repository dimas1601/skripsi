<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Monitoring Kandang Ayam Broiler</title>
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
    <!-- memanggil data_user grafik -->
    
</head>
<body>
    <!-- SIDEBAR -->
	<section id="sidebar">
        <a href="assets/img/f.jpg" target="_blank"class="brand" style="">
            <img src="assets/img/f.jpg">
			<span class="text">Ayam&nbsp&nbspBroiler</span>
		</a>
		<ul class="side-menu top">
			<li>
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
			<li  class="active">
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
			<div class="register">
                <div class="title">Registrasi User</div>
                <div class="content">
                <div class="input-box">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" placeholder="Masukkan Nama Depan" name="nama_depan" required>
                </div>
                
                <div class="input-box">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" placeholder="Masukkan Nama Belakang" name="nama_belakang" required>
                </div>
                
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Masukkan Email" name="email" required>
                </div>
                
                <div class="input-box">
                    <label for="phone">No Handphone</label>
                    <input type="tel" placeholder="Masukkan No Handphone" name="phone" required>
                </div>
                
                <div class="input-box">
                    <label for="pass">Password</label>
                    <input type="password" id="password" placeholder="Masukkan Password" name="password" required>
                   <span class="pass">
                   <i class="bi bi-eye-slash" id="togglePassword"></i>
                   </span>
                    
                </div>
                <div class="input-box">
                    <label for="confirm_pass">Konfirmasi Password</label>
                    <input type="password" id="passwordConfirm" placeholder="Masukkan Konfirmasi Password" name="confirm_password" required>
                    <span class="pass_confirm">
                   <i class="bi bi-eye-slash" id="togglePasswordConfirm"></i>
                    </span>
                  </div>
                
            </div>
            </div>
			

		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	
    <script src="assets/js/script.js"></script>
</body>
</html>