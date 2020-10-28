<!-- Navbar -->
<?php 
$id = $_GET['id'];
$data_shown = $run_crud->see_update('transport_type', 'id_trans_type', $id);
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
            <a class="navbar-brand" href="index.php?page=tb_type">Back</a>
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
                <h5 class="title">Edit Data</h5>
              </div>
              <div class="card-body">
                <form method=post>
                  

                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" placeholder="desc" value="<?php echo $data_shown['kelas']; ?>" name="user">
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
            "kelas = '$_POST[user]'"
            
        );

        $run = $run_crud->update('transport_type', 'id_trans_type', $add, $id);
        if($run == "ok")
        {
            echo "<script>alert('Data tersimpan'); document.location='index.php?page=tb_type'</script>";
        }
        else
        {
            echo "<script>alert('Data tidak tersimpan');</script>";
            echo $run;
        }
}
?>