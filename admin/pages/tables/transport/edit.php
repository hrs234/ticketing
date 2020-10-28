<!-- Navbar -->
<?php 
$id = $_GET['id'];
$data_shown = $run_crud->see_update('transportation', 'id_transportation', $id);
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
            <a class="navbar-brand" href="index.php?page=tb_transport">Back</a>
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
                        <label>Kode</label>
                        <input type="text" class="form-control" placeholder="code" name="kode" value="<?php echo $data_shown['code']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" placeholder="desc" name="desc" value="<?php echo $data_shown['nama_maskapai']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Jml.Tempat Duduk</label>
                        <input type="text" class="form-control" placeholder="desc" name="seat" value="<?php echo $data_shown['seat_qty']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Tipe Transportasi</label>
                        
                        <select name="tipe_transportasi" class="form-control">
                          <option value="<?php echo $data_shown['id_trans_type']; ?>">-- yang dipilih sebelumnya--</option>
                          <?php 
                          $data_pengguna = $run_crud->tampil('transport_type');
                          foreach($data_pengguna as $data_pgn)
                          {
                          ?>
                            <option value="<?php echo $data_pgn['id_trans_type']; ?>"><?php echo $data_pgn['kelas']; ?></option>
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
            "code = '$_POST[kode]'",
            "nama_maskapai = '$_POST[desc]'",
            "seat_qty = '$_POST[seat]'",
            "id_trans_type = '$_POST[tipe_transportasi]'"
            
        );

        $run = $run_crud->update('transportation', 'id_transportation', $add, $id);
        if($run == "ok")
        {
            echo "<script>alert('Data tersimpan'); document.location='index.php?page=tb_transport'</script>";
        }
        else
        {
            echo "<script>alert('Data tidak tersimpan');</script>";
            echo $run;
        }
}
?>