<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Menu</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
             
              <li class="nav-item dropdown">
                <?php 
                // print_r(scandir('../admin/pages/'));
                include "../admin/pages/account-name.php"; ?>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Silahkan Pilih</h5>
                <p class="category">Data Menu</a>
                </p>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                  <a href="index.php?page=tb_user" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons business_badge"></i>
                      <p class="text-muted">User</p>
                    </div>
                  </a>

                  <a href="index.php?page=tb_customer" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons users_single-02"></i>
                      <p class="text-muted">Customer</p>
                    </div>
                  </a>


                  <a href="index.php?page=tb_transport" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons transportation_air-baloon"></i>
                      <p class="text-muted">Transportation</p>
                    </div>
                  </a>
   
                  <a href="index.php?page=tb_type" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons shopping_tag-content"></i>
                      <p class="text-muted">Transportation type</p>
                    </div>
                  </a>


                  <a href="index.php?page=tb_rute" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons ui-1_send"></i>
                      <p class="text-muted">Rute</p>
                    </div>
                  </a>


                  <a href="index.php?page=tb_reserv" class="font-icon-list col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons education_paper"></i>
                      <p class="text-muted">Reservation</p>
                    </div>
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>