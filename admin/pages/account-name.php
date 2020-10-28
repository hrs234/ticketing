<?php 
$iduser = $_SESSION['userid']; 
$data_user = $run_crud->see_update('user', 'id_user', $iduser);
?>
<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <div class="dropdown-item"><?php echo $data_user['fullname']; ?></div>
                  <a class="dropdown-item" href="pages/logout.php">Logout</a>
                </div>