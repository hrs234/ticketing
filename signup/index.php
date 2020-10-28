<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bookTicket</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" method="post">
				<h2>Daftar akun</h2>
				<div class="form-row">
					<label for="full-name">Nama</label>
					<input type="text" name="nama" id="full-name" class="input-text" placeholder="nama" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Username</label>
					<input type="text" name="user" id="your-email" class="input-text" placeholder="username" required >
					<i class="fas fa-id-card"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Password anda" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Alamat</label>
					<input type="text" name="alamat" id="your-email" class="input-text" placeholder="alamat" required >
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="form-row">
					<label for="your-email">No.Handphone</label>
					<input type="text" name="no_hp" id="your-email" class="input-text" placeholder="No handphone" required >
					<i class="fas fa-phone"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Gender</label>
					<!-- <input type="text" name="user" id="your-email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}"> -->
					<select name="gender" id="" class="input-text spec">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
					<i class="fas fa-chevron-down"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
					<a href="../index.html">Kembali</a>					
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
require_once "../CRUD/engine.php";
$run_crud = new crud();

if(isset($_POST['register']))
{
	$generate = rand(0,2000);
	$name = $_POST['nama'];

	$add = array(
		'id_user' => "$generate",
		'username' => $_POST['user'],
		'password' => $_POST['password'],
		'fullname' => $name,
		'level' => "user"
	);

	$exe = $run_crud->insert('user', $add);
	if($exe == "ok")
	{
		$add_cus = array(
		'name' => $name,
		'address' => $_POST['alamat'],
		'phone' => $_POST['no_hp'],
		'gender' => $_POST['gender'],
		'id_user' => $generate
		);
		$exe_cus = $run_crud->insert('customer', $add_cus);
		if($exe_cus == "ok")
		{
			echo "<script>alert('pengguna baru terbuat'); document.location='../sigin';</script>";
		}
		else
		{
			echo "<script>alert('terjadi masalah customer');</script>";
			echo $exe_cus;
		}
	}
	else
	{
		echo "<script>alert('terjadi masalah user');</script>";
		echo $exe;
	}
}
?>