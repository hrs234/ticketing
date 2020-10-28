
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

		<!-- end:header-top -->
<div class="fh5co-hero">
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/newyork.jpg);">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-5">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Penerbangan</a>
								</li>

							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<form method="post">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Dari:</label>
													<input type="text" class="form-control" id="from-place" placeholder="Depok" name="dari"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Tujuan:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Makassar" name="ke"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt alternate">
												<div class="input-field">
													<label for="date-start">Datang saat:</label>
													<input type="text" class="form-control" id="date-start" placeholder="yyyy-mm-dd" name="tgl"/>
												</div>
											</div>
											<!--<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">To:</label>
													<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan"/>
												</div>
											</div> -->
											<!-- <div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-start">Check In:</label>
													<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt alternate">
												<div class="input-field">
													<label for="date-end">Check Out:</label>
													<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy"/>
												</div>
											</div> -->
											<div class="col-sm-12 mt">
												<section>
													<label for="class">Maskapai:</label>
													<select class="cs-select cs-skin-border" name="pesawat">
														<option value="">-- silahkan pilih--</option>
														<option value="Sriwijaya">Sriwijaya</option>
														<option value="Merpati Airlines">Merpati Airlines</option>
														<option value="Garuda">Garuda</option>
													</select>
												</section>
											</div>

											<!-- <div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Adult:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<section>
													<label for="class">Children:</label>
													<select class="cs-select cs-skin-border">
														<option value="" disabled selected>1</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
													</select>
												</section>
											</div> -->
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" value="Cari" name="ok">
											</div>
										</div>
									</div>
								</form>

								<div role="tabpanel" class="tab-pane" id="hotels">
									<div class="row">
										<div class="col-xxs-12 col-xs-12 mt">
											<div class="input-field">
												<label for="from">City:</label>
												<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA" />
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt alternate">
											<div class="input-field">
												<label for="date-start">Return:</label>
												<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt alternate">
											<div class="input-field">
												<label for="date-end">Check Out:</label>
												<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" />
											</div>
										</div>
										<div class="col-sm-12 mt">
											<section>
												<label for="class">Rooms:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="economy">1</option>
													<option value="first">2</option>
													<option value="business">3</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class">Adult:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class">Children:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</section>
										</div>
										<div class="col-xs-12">
											<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="packages">
									<div class="row">
										<div class="col-xxs-12 col-xs-6 mt">
											<div class="input-field">
												<label for="from">City:</label>
												<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA" />
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<div class="input-field">
												<label for="from">Destination:</label>
												<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan" />
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt alternate">
											<div class="input-field">
												<label for="date-start">Departs:</label>
												<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
											</div>
										</div>
										<div class="col-xxs-12 col-xs-6 mt alternate">
											<div class="input-field">
												<label for="date-end">Return:</label>
												<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" />
											</div>
										</div>
										<div class="col-sm-12 mt">
											<section>
												<label for="class">Rooms:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="economy">1</option>
													<option value="first">2</option>
													<option value="business">3</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class">Adult:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</section>
										</div>
										<div class="col-xxs-12 col-xs-6 mt">
											<section>
												<label for="class">Children:</label>
												<select class="cs-select cs-skin-border">
													<option value="" disabled selected>1</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
												</select>
											</section>
										</div>
										<div class="col-xs-12">
											<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="desc2 animate-box">
						<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
							<h2>bookTicket</h2>
							<h3>kemudahan anda dalam memesan ticket</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
		
		

		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">


				<div class="row">
				<?php 
				if(isset($_POST['ok']))
				{
					if(isset($_GET['ke']))
					{
						$halamanan = $_GET['ke'];
					}
					else
					{
						$halamanan = 1;
					}

					$se = $_POST['dari'];
					$seB = $_POST['ke'];
					$seC = $_POST['pesawat'];
					$seD = $_POST['tgl'];
					
					$batasan = 6;
					$data_pengguna = $run_crud->page_multiple($batasan, $halamanan, 'searchvtiga', $se, $seB, $seC, $seD, 'rute_form','rute_to','nama_maskapai', 'depart_at');
					$counter = mysqli_num_rows($data_pengguna);
				?>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Hasil Pencarian</h3>
						<p>Penemuan kueri sebanyak <?= $counter; ?></p>
					</div>
				</div>
				<?php
					foreach($data_pengguna as $data_pgn)
					{
					?>
				
				
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3><?= $data_pgn['rute_form']; ?> - <?= $data_pgn['rute_to']; ?></h3>
								<span><?= $data_pgn['nama_maskapai']; ?></span>
								<span class="price">Rp.<?= number_format($data_pgn['price']); ?></span>
								<?php 
								if(isset($_SESSION['userid']))
								{
									if($_SESSION['role'] == "user")
									{
									?>
										<a class="btn btn-primary btn-outline" href="cekout.php?idrute=<?php echo $data_pgn['id_rute']; ?>&idtype=<?php echo $data_pgn['id_trans_type']; ?>&idpesawat=<?php echo $data_pgn['id_transportation']; ?>">Pesan<i class="icon-arrow-right22"></i></a>
									<?php 
									}
									else
									{?>
										<a class="btn btn-primary btn-outline" href="admin">Admin<i class="icon-arrow-right22"></i></a>										
									<?php 
									}
									?>

								<?php
								}
								else
								{
								?>
									<a class="btn btn-primary btn-outline" href="sigin">Pesan<i class="icon-arrow-right22"></i></a>								
								<?php 
								}
								?>
							</div>
						</div>
					</div>


					<?php 
					} 
					?>
				</div>
				<div class="row">
					<?php 
					
					$viewing_num = $run_crud->page_numering_multiple($batasan, 'searchvtiga','rute_form','rute_to','nama_maskapai', 'depart_at', $se, $seB, $seC, $seD);
					for($ca=1;$ca<=$viewing_num;$ca++)
					{
						if($ca != $halamanan)
						{
							echo "<a href=$_SERVER[PHP_SELF]?ke=$ca>$ca</a> |";
						}
						else
						{
							echo "<b>$ca</b> |";
						}
					} 
				
					?>
				</div>
				<?php 
				}
				else
				{
					if(isset($_GET['ke']))
					{
						$halamanan = $_GET['ke'];
					}
					else
					{
						$halamanan = 1;
					}
								
					$batasan = 6;
					$data_pengguna = $run_crud->page_nosearch($batasan, $halamanan, 'searchvtiga');
					?>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Lihat Paket</h3>
							<p>Harga murah, kualitas terbaik</p>
						</div>
					</div>
					<?php
					foreach($data_pengguna as $data_pgn)
					{
					?>

					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/place-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
							<div class="desc">
								<span></span>
								<h3><?= $data_pgn['rute_form']; ?> - <?= $data_pgn['rute_to']; ?></h3>
								<span><?= $data_pgn['nama_maskapai']; ?></span>
								<span class="price">Rp.<?= number_format($data_pgn['price']); ?></span>
								<?php 
								if(isset($_SESSION['userid']))
								{
									if($_SESSION['role'] == "user")
									{
									?>
										<a class="btn btn-primary btn-outline" href="cekout.php?idrute=<?php echo $data_pgn['id_rute']; ?>&idtype=<?php echo $data_pgn['id_trans_type']; ?>&idpesawat=<?php echo $data_pgn['id_transportation']; ?>">Pesan<i class="icon-arrow-right22"></i></a>
									<?php 
									}
									else
									{?>
										<a class="btn btn-primary btn-outline" href="admin">Admin<i class="icon-arrow-right22"></i></a>										
									<?php 
									}
									?>

								<?php
								}
								else
								{
								?>
									<a class="btn btn-primary btn-outline" href="sigin">Pesan<i class="icon-arrow-right22"></i></a>								
								<?php 
								}
								?>
							</div>
						</div>
					</div>

					<?php 
					}
					?>
					</div>
					<div class="row">
					<?php
                            $viewing_num = $run_crud->page_numering_nosearch($batasan, 'searchvtiga');
                            
                            for($ca=1;$ca<=$viewing_num;$ca++)
                            {
                                if($ca != $halamanan)
                                {
                                    
                                     echo "
                                     <a href=$_SERVER[PHP_SELF]?ke=$ca>$ca</a> |
                                     ";
                                }
                                else
                                {
                                     
                                     echo "<b>$ca</b> |";
                                }
                            }
                            
                    ?>
					</div>
					<?php 
				}
				?>





			</div>
		</div>

		
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
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	<script>
	// $('#date-start').datepicker({
	// 	format: 'YYYY-MM-DD'
	// });
	</script>

	</body>
</html>

