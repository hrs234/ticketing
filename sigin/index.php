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
				<h2>Login</h2>
				<div class="form-row">
					<label for="full-name">Username</label>
					<input type="text" name="u" id="full-name" class="input-text" placeholder="username anda" required>
					<i class="fas fa-user"></i>
				</div>
				
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Password anda" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="ok" class="register" value="Masuk">
					<a href="../index.php">Kembali</a>
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php 
require_once('../CRUD/engine.php');
$run_crud = new crud();

if(isset($_POST['ok']))
{
	session_start();
	$user = $_POST['u'];
	$pass = $_POST['password'];
	$cek = $run_crud->login('user', 'username', 'password', $user, $pass);
	if($cek != "no")
	{
		$get_level = $cek['level'];
		if($get_level == "admin")
		{
			$_SESSION['role'] = "admin";
			$_SESSION['userid'] = $cek['id_user'];
			echo "<script>alert('login berhasil, Admin'); document.location='../admin';</script>";
		}
		else if($get_level == "user")
		{

			$_SESSION['role'] = "user";
			$_SESSION['userid'] = $cek['id_user'];			
			echo "<script>alert('login berhasil, User'); document.location='../index.php';</script>";
			
		}
	}
	else
	{
		echo "<script>alert('login gagal');</script>";
	}
}
?>