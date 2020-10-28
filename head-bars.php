<ul class="sf-menu" id="fh5co-primary-menu">
						<?php 
                        session_start();
                        include_once "CRUD/engine.php";
                        $run_crud = new crud();
						if(isset($_SESSION['userid']) && isset($_SESSION['role']))
						{
							$userid = $_SESSION['userid'];
							$role = $_SESSION['role'];
                            
                            $userData = $run_crud->see_update('user', 'id_user', $userid);
						?>
							<!-- setelah login -->
							<li class="active">
								<a href="#" class="fh5co-sub-ddown">Halo, <?php echo $userData['fullname']; ?></a>
								<ul class="fh5co-sub-menu">
									<li><a href="logout.php">Logout</a></li>
									<?php 
									if($role == "admin")
									{
									?>
									<li><a href="admin">Admin page</a></li>									
									<?php 
									}
									?>
								</ul>
							</li>
						<?php 
						}
						else
						{ 
						?>
							<!-- bila belum login -->
							<li><a href="sigin">Login</a></li>
							<li><a href="signup">Daftar</a></li>
						<?php 
						}
						?>
						</ul>