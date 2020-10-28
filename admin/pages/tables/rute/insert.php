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
            <a class="navbar-brand" href="index.php?page=tb_rute">Back</a>
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
                        <label>Bandara</label>
                        <input type="text" class="form-control" placeholder="code" name="kode">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Rute Dari</label>
                        <input type="text" class="form-control" placeholder="desc" name="desc">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Rute Ke</label>
                        <input type="text" class="form-control" placeholder="desc" name="rt_ke">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" placeholder="desc" name="seat">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-11 pr-1">
                      <div class="form-group">
                        <label>Transportasi</label>
                        
                        <select name="tipe_transportasi" id="" class="form-control">
                          <?php 
                          $data_pengguna = $run_crud->tampil('transportation');
                          foreach($data_pengguna as $data_pgn)
                          {
                          ?>
                            <option value="<?php echo $data_pgn['id_transportation']; ?>"><?php echo $data_pgn['nama_maskapai']; ?></option>
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
  $check = mysqli_num_rows($data_pengguna);
  if($check > 0)
  {
        $add = array(
            'depart_at' => $_POST['kode'],
            'rute_form' => $_POST['desc'],
            'rute_to' => $_POST['rt_ke'],
            'price' => $_POST['seat'],
            'id_transportation' => $_POST['tipe_transportasi']
          
        );

        $run = $run_crud->insert('rute', $add);
        if($run == "ok")
        {
            echo "<script>alert('Data tersimpan'); document.location='index.php?page=tb_rute';</script>";
        }
        else
        {
            echo "<script>alert('Data tidak tersimpan');</script>";
            echo $run;
        }
  }
  else
  {
      echo "<script>alert('data tipe transportasi kosong'); document.location='index.php?page=tb_transportation';</script>";
  }
}
?>