<!-- Navbar -->
<?php 
$id = $_GET['id'];
$data_shown = $run_crud->see_update('user', 'id_user', $id);
?>
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
            <a class="navbar-brand" href="index.php?page=tb_user">Back</a>
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
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Tambah Data</h5>
              </div>
              <div class="card-body">
                <form method=post>
                  

                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="<?php echo $data_shown['username']; ?>" name="user">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" value="<?php echo $data_shown['password']; ?>" name="pass">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="nama" value="<?php echo $data_shown['fullname']; ?>" name="fullname">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="form-control">
                          <option value="<?php echo $data_shown['level']; ?>">-- opsi sebelumnya --</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="level" value="" name="level"> -->
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" placeholder="Company" value="Okay" name="yes">
                      </div>
                    </div>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
<?php 
if(isset($_POST['yes']))
{
  $add = array(
            "username = '$_POST[user]'",
            "password = '$_POST[pass]'",
            "fullname = '$_POST[fullname]'",
            "level = '$_POST[level]'"
        );

        $run = $run_crud->update('user', 'id_user', $add, $id);
        if($run == "ok")
        {
            echo "<script>alert('Data tersimpan'); document.location='index.php?page=tb_user'</script>";
        }
        else
        {
            echo "<script>alert('Data tidak tersimpan');</script>";
            echo $run;
        }
}
?>