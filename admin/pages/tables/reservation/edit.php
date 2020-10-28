<!-- Navbar -->
<?php 
$id = $_GET['id'];
$data_shown = $run_crud->see_update('reservation', 'id_reservation', $id);
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
            <a class="navbar-brand" href="index.php?page=tb_reserv">Back</a>
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
                        <label>Kode Reservasi</label>
                        <input type="text" class="form-control" placeholder="code reservation" name="kode_reserv" value="<?php echo $data_shown['reservation_code']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Reservation di</label>
                        <input type="text" class="form-control" placeholder="desc" name="reserv_at" value="<?php echo $data_shown['reservation_at']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>ID Customer</label>
                        
                        <select name="customer" id="" class="form-control">
                          <option value="<?php echo $data_shown['id_customer']; ?>" selected>--yang dipilih--</option>
                          <?php 
                          $data_cutomer = $run_crud->tampil('customer');
                          foreach($data_cutomer as $data_cst)
                          {
                          ?>
                            <option value="<?php echo $data_cst['id_customer']; ?>"><?php echo $data_cst['name']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="desc" name="pass"> -->
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Kode Tempat Duduk</label>
                        <input type="text" class="form-control" placeholder="desc" name="kd_tempat" value="<?php echo $data_shown['seat_code']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>ID Rute</label>
                        
                        <select name="rute" id="" class="form-control">
                          <option value="<?php echo $data_shown['id_rute']; ?>">-- yang dipilih--</option>
                          <?php 
                          $data_rute = $run_crud->tampil('rute');
                          foreach($data_rute as $data_rts)
                          {
                          ?>
                            <option value="<?php echo $data_rts['id_rute']; ?>"><?php echo $data_rts['rute_form']; ?> - <?php echo $data_rts['rute_to']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="desc" name="pass"> -->
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Depart At</label>
                        <input type="text" class="form-control" placeholder="desc" name="depart_at" value="<?php echo $data_shown['depart_at']; ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" placeholder="desc" name="price" value="<?php echo $data_shown['price']; ?>">
                      </div>
                    </div>
                  </div>
                  
                  
                  
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>ID User</label>
                        
                        <select name="user" id="" class="form-control">
                          <option value="<?php echo $data_shown['id_user']; ?>">--yang dipilih--</option>
                          <?php 
                          $data_user = $run_crud->tampil('user');
                          foreach($data_user as $data_usr)
                          {
                          ?>
                            <option value="<?php echo $data_usr['id_user']; ?>"><?php echo $data_usr['fullname']; ?> - <?php echo $data_rts['rute_to']; ?></option>
                          <?php
                          }
                          ?>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="desc" name="pass"> -->
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
            "reservation_code = '$_POST[kode_reserv]'",
            "reservation_at = '$_POST[reserv_at]'",
            "id_customer = '$_POST[customer]'",
            "seat_code = '$_POST[kd_tempat]'",            
            "id_rute = '$_POST[rute]'",
            "depart_at = '$_POST[depart_at]'",            
            "price = '$_POST[price]'",            
            "id_user = '$_POST[user]'"            
            
            
        );

        $run = $run_crud->update('reservation', 'id_reservation', $add, $id);
        if($run == "ok")
        {
            echo "<script>alert('Data tersimpan'); document.location='index.php?page=tb_reserv'</script>";
        }
        else
        {
            echo "<script>alert('Data tidak tersimpan');</script>";
            echo $run;
        }
}
?>