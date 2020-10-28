
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bookTicket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>bookTicket</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<?php include "head-bars.php"; ?>
					</nav>
				</div>
			</div>
		</header>

		<?php 
		include_once "CRUD/engine.php";
		$run_crud = new crud();
		if(isset($_SESSION['userid']) == false && $_SESSION['role'] == "admin")
		{
			echo "<script>document.location='index.php';</script>";
		}
		?>

		<!-- end:header-top -->
	
		

		</div>
		

		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Detail Pemesanan</h3>
						<p>cek pemesanan</p>
					</div>
				</div>
				
				<?php 
				// getting codes
				
				if(isset($_GET['idrute'])&&isset($_GET['idtype'])&&isset($_GET['idpesawat']))
				{
					$resCode = "RS-".rand(0,1000);
					$resArea = "INDONESIA";
					$userID = $_SESSION['userid'];
					$getPack = $_GET['idrute'];
					$getKlas = $_GET['idtype'];
					$getplane = $_GET['idpesawat'];

					$getinfo = $run_crud->see_update('customer', 'id_user', $userID);

					$getdetpack = $run_crud->see_update('rute', 'id_rute', $getPack);

					$getkelas = $run_crud->see_update('transport_type', 'id_trans_type', $getKlas);

					$getMaskapai = $run_crud->see_update('transportation', 'id_transportation', $getplane);
				}
				else
				{
					echo "<script>document.location='index.php';</script>";			
				}
				
				?>
				<form method=POST>
					<div class="row animate-box">
						<div class="col-md-4">
							<p>Nama</p>
							<p>Kode reservasi</p>
							<p>Destinasi</p>
							<p>Reservasi di</p>
							<p>Tanggal keberangkatan</p>
							<p>Maskapai</p>
							<p>Kelas Penerbangan</p>
							<p>Banyak Tempat</p>
							<p>Harga/orang</p>
							<p>Pesan Tempat Sebanyak</p>
							
						</div>
						<div class="col-md-6">
							<p><?= $getinfo['name']; ?></p>
							<input type="hidden" name="idcustomer" value="<?= $getinfo['id_customer']; ?>">

							<p><?= $resCode; ?></p>
							<input type="hidden" name="rescode" value="<?= $resCode; ?>">

							<p><?= $getdetpack['rute_form']; ?> - <?= $getdetpack['rute_to']; ?></p>
							<input type="hidden" name="id_rute" value="<?= $getdetpack['id_rute']; ?>">

							<p><?= $resArea; ?></p>
							<input type="hidden" name="reservat" value="<?= $resArea; ?>">


							<p><?= $getdetpack['depart_at']; ?></p>
							<input type="hidden" name="depart" value="<?= $getdetpack['depart_at']; ?>">

							<p><?= $getMaskapai['nama_maskapai']; ?></p>


							<p><?= $getkelas['kelas']; ?></p>
							
							
							<p><?= $getMaskapai['seat_qty']; ?></p>
							<input type="hidden" name="sisa_tempat" value="<?= $getMaskapai['seat_qty']; ?>">
							
							
							<p>Rp.<?= number_format($getdetpack['price']); ?></p>
							<input type="hidden" name="price" value="<?= $getdetpack['price']; ?>">

							<p>
								<div class="input-field">
									<input type="number" name="banyak" id="" class="form-control" value="0">
										
								</div>
							</p>

						</div>	
					</div>
					<div class="row animate-box text-right">
						<input type="submit" value="Pesan" class="btn btn-primary btn-outline btn-lg" name="ok">
					</div>
				</form>
				<?php 
				if(isset($_POST['ok']))
				{
					$sisa = $_POST['sisa_tempat'];
					$ambil_kursi = $_POST['banyak'];
					if($sisa > 0)
					{
						if($ambil_kursi > 0)
						{
							for($a=1; $a<=$ambil_kursi; $a++)
							{
								$kode_bangku = "ST-".rand(0, 1000);
								
								$add = array(
									'reservation_code' => $_POST['rescode'],
									'reservation_at' => $_POST['reservat'],
									'id_customer' => $_POST['idcustomer'],
									'seat_code' => $kode_bangku,
									'id_rute' => $_POST['id_rute'],
									'depart_at' => $_POST['depart'],
									'price' => $_POST['price'],
									'id_user' => $userID
								);
								$jalan = $run_crud->insert('reservation', $add);
								if($jalan != "ok")
								{
									echo $jalan;
								}
							}

							$hasil_kursi = $sisa - $ambil_kursi;
							$update_data = array(
								"seat_qty = '$hasil_kursi'"
							);
							$update = $run_crud->update('transportation', 'id_transportation', $update_data, $getplane);
							if($update != "ok")
							{
								echo "<script>alert('data seat_qty gagal di update');</script>";
							}


							echo "<script>alert('Data telah masuk silahkan cek selengkapnya di email anda'); document.location='index.php';</script>";
						}
						else
						{
							echo "<script>alert('Jumlah kursi tidak boleh kosong'); history.go(0);</script>";
							
						}
					}
					else
					{
						echo "<script>alert('maaf kursi tidak mencukupi'); history.go(0);</script>";
					}
				}
				?>
			</div>
		</div>
				<!-- END map -->

		<footer>
			<div id="footer">
				<div class="container">
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2016 Free Html5 <a href="#">Module</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

