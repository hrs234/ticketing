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
            <a class="navbar-brand" href="#pablo">Profil Anda</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <?php 
        $IDuser = $_SESSION['userid']; 
        $data_profile = $run_crud->see_update('user', 'id_user', $IDuser);
      ?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method=post>
                  <div class="row">
                    
                    <div class="col-md-5 px-1 ml-2">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="<?php echo $data_profile['username']; ?>" name="user">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" placeholder="password" value="<?php echo $data_profile['password']; ?>" name="pass">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" class="form-control" placeholder="fullname" value="<?php echo $data_profile['fullname']; ?>" name="fullname">
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="submit" value="OK" class="btn btn-success" name="ok">
                        <!-- <label>About Me</label> -->
                        <!-- <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea> -->
                      </div>
                    </div>
                  </div>
                </form>
                <?php 
                if(isset($_POST['ok']))
                {
                    $add = array(
                      "username = '$_POST[user]'",
                      "password = '$_POST[pass]'",
                      "fullname = '$_POST[fullname]'"
                      
                    );

                    $exe = $run_crud->update('user', 'id_user', $add, $IDuser);
                    if($exe == "ok")
                    {
                      echo "<script>alert('data sukses diperbarui'); document.location='index.php?page=profil';</script>";
                    }
                    else
                    {
                      echo "<script>alert('data gagal diperbarui');</script>";
                      
                      echo $exe;
                    }
                }
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../upload/bali.jpg" alt="...">
              </div>
              
              <div class="card-body">
                <div class="author">
                    <img class="avatar border-gray" src="../upload/bali.jpg" alt="...">
                    <h5 class="title"><?php echo $data_profile['fullname']; ?></h5>
  
                    <p class="description">
                    <?php echo $data_profile['level']; ?>
                  </p>
                </div>
                
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <a href="pages/logout.php" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="now-ui-icons media-1_button-power"></i>
                </a>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>