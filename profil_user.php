<?php
include 'db.php';
// echo '<script>alert("Selamat Datang Di Halaman Admin")</script>';
// if($_SESSION['status_login'] != true){
//     echo '<script>window.location="login.php"</script>';
// }
$user=mysqli_query($conn,"SELECT * FROM data_user where id =12");
$data_user=mysqli_fetch_object($user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Settings</title>
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
			<li>
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="histori_user.php">
                    <i class='bx bx-history'></i>
					<span class="text">History</span>
				</a>
			</li>
			<li class="active">
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

			<div class="data-profil">
        <div class="profil">
        <center><h3 style="font-size: 21px;font-weight: bold; margin-bottom:20px">Profile Settings</h3></center>
        
  
                    <form action=""method="post" enctype="multipart/form-data" > 
                        
                    <div class="kol">
                        <div class="form-group">
                            <h4 class="labell">First Name</h4>
                            <input type="text" class="input-form" name="nama_depan" value="<?php echo ucfirst($data_user->nama_depan) ?>" required>
                        </div>
                        <div class="form-group">
                            <h4 class="labell">Last Name</h4>
                            <input type="text" class="input-form" name="nama_belakang" value="<?php echo ucfirst($data_user->nama_belakang) ?>" required>
                        </div>
                    </div>               
                    <div class="kol">
                        <div class="form-group">
                            <h4 class="labell">Alamat</h4>
                            <input type="text" class="input-form" name="alamat" value="<?php echo ucfirst($data_user->alamat) ?>" required>
                        </div>
                        <div class="form-group">
                            <h4 class="labell">Email</h4>
                            <input type="email" class="input-form" name="email" value="<?php echo $data_user->email ?>" required>
                        </div>
                    </div>
                    <div class="kol">
                        <div class="form-group">
                            <h4 class="labell">No Handphone</h4>
                            <input type="tel" class="input-form" name="no_hp" value="<?php echo $data_user->no_hp ?>" required>
                        </div>
                        <div class="form-pass">
                            <h4 class="labell">Password</h4>
                            <input type="password" id="password"  class="input-form" name="pass" value="<?php echo $data_user->password ?>" required>
                           
                          
                        </div>
                        
                    </div> 
                    <div class="togel-pass">
                    <span class="pass">
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </span>
                    </div>

                    <!-- <ion-icon class="pass" name="eye-off-outline" id="eye" onclick="eyes()" ></ion-icon> -->
                    <!-- <div class="kol-1">
                        <div class="form-pass">
                            <h4 class="labell">Password</h4>
                            <input type="password" id="password"  class="input-form-pass" value="<?php echo $data_user->password ?>">
                            <span class="pass">
                            <ion-icon name="eye-off-outline" id="eye" onclick="eyes()" ></ion-icon>
                        </div>
                    </div> -->

        <!--                
                        <div class="button">
                            <button class="btn btn1" name="btn-data"><b>Update Data</b></button>
                        </div>  -->

                  <div class="kol-1">
                        <div class="gbr">
                            <a href="assets/foto/<?php echo $data_user->foto ?>" target="_blank"><img src="assets/foto/<?php echo $data_user->foto ?>" alt="" ></a>
                        </div>
                        <div class="img">
                        <input type="file" name="gambar" id="file" hidden>
                            <div class="img-area" data-img="">
                                <i style="color:#0C3C78;"class='bx bxs-cloud-upload icon'></i>
                                <h3><b>Upload Image</b></h3>
                            </div>
                        <input type="button" class="select-image" value="Select Image">
                        </div>
                        
                    </div>
                    <div class="tombol">
                        <button class="btn-1" name="submit"><b>Update Data</b></button>
                    </div> 
                    </form> 
                </div>
           
            <?php
                if(isset($_POST['submit'])){
                    $nama_dpn=$_POST['nama_depan'];
                    $nama_belakang=$_POST['nama_belakang'];
                    
                    $alamat=$_POST['alamat'];
                    $email=$_POST['email'];
                    $hp=$_POST['no_hp'];
                    $pass=$_POST['pass'];

                    $filename = $_FILES['gambar']['name'];
                    $tmp_name = $_FILES['gambar']['tmp_name'];
                    
                    if($filename!=""){
                        $type1 = explode('.', $filename);
                        $type2 = $type1[1];

                        $newname = 'foto'.time().'.'.$type2;

                        // menampung data format file yang diizinkan
                        $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

						// validasi format file
						if(!in_array($type2, $tipe_diizinkan)){
                            $namagambar=$data_user->foto;
							// jika format file tidak ada di dalam tipe diizinkan
							echo '<script>alert("Format file tidak diizinkan")</script>';
						}else{
							// jika format file sesuai dengan yang ada di dalam arraytipe diizinkan
							// proses upload file sekaligus insert ke database
							move_uploaded_file($tmp_name,'./assets/foto/'.$newname);
                            unlink('./assets/foto/'.$data_user->foto);
                            $namagambar=$newname;
							
						}
                    }else{
                        // jika user tidak ganti gambar
                        $namagambar=$data_user->foto;
                    }
                    $update = mysqli_query($conn,"UPDATE data_user SET 
                        nama_depan='".$nama_dpn."',
                        nama_belakang='".$nama_belakang."',
                        email='".$email."',
                        password='".$pass."',
                        no_hp='".$hp."',
                        alamat='".$alamat."',
                        foto='".$namagambar."'
                        WHERE id='".$data_user->id."'");
                    if($update){
                        echo '<script>alert("Update Data Berhasil")</script>';
                        echo '<script>window.location="edit-profil.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }
                   
                    // echo '<script>window.location="histori_user.php"</script>';
                }
            ?>
        </div>
        </div>

    </div>
     <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
       
    </script> 
			

		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	
    <script src="assets/js/foto.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>