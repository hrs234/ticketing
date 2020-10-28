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
            <a class="navbar-brand" href="index.php?page=tb_menu">Back</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form method="post">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search: Id" name="tx_cari">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <?php include "../admin/pages/account-name.php"; ?>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="index.php?page=tb_type_insert">
                  <i class="now-ui-icons ui-1_simple-add"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pages/tables/type_trans/cetak.php">
                  <i class="now-ui-icons files_paper"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
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
                <h4 class="card-title"> Tipe Transportasi</h4>
              </div>
              
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID</th>
                      <th>Deskripsi</th>
                      
                      <th colspan=2>Opsi</th>
                    </thead>
                    
                    <?php 
                    if(isset($_POST['tx_cari']))
                        {
                            if(isset($_GET['ke']))
                            {
                                $halamanan = $_GET['ke'];
                            }
                            else
                            {
                                $halamanan = 1;
                            }
                            $se = $_POST['tx_cari'];
                            $batasan = 4;
                            $data_pengguna = $run_crud->page($batasan, $halamanan, 'transport_type', $se, 'id_trans_type');
                            foreach($data_pengguna as $data_pgn)
                            { 
                    ?>
                              <tbody>
                                <tr>
                                  <td><?php echo $data_pgn['id_trans_type']; ?></td>
                                  <td><?php echo $data_pgn['kelas']; ?></td>
                            
                                  <td><a href="index.php?page=tb_type_edit&id=<?php echo $data_pgn['id_trans_type']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                  <td><a href="../admin/pages/tables/delete.php?tabel=transport_type&kol=id_trans_type&hlm=tb_type&id=<?php echo $data_pgn['id_trans_type']; ?>"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
                                </tr>
                            <?php 
                            }
                            ?>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="card-footer">
                <?php
                                $viewing_num = $run_crud->page_numering($batasan, 'transport_type', 'id_trans_type', $se);
                                for($ca=1;$ca<=$viewing_num;$ca++)
                                {
                                    if($ca != $halamanan)
                                    {
                                        echo "<a href=$_SERVER[PHP_SELF]?page=tb_type&ke=$ca>$ca</a> |";
                                    }
                                    else
                                    {
                                        echo "<b>$ca</b> |";
                                    }
                                } 
                        ?>
              </div>

            </div>
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
                            
            $batasan = 4;
            $data_pengguna = $run_crud->page_nosearch($batasan, $halamanan, 'transport_type');
            foreach($data_pengguna as $data_pgn)
            {
            ?>
            <tbody>
              <tr>
                  <tr>
                                  <td><?php echo $data_pgn['id_trans_type']; ?></td>
                                  <td><?php echo $data_pgn['kelas']; ?></td>
                            
                                  <td><a href="index.php?page=tb_type_edit&id=<?php echo $data_pgn['id_trans_type']; ?>"><i class="now-ui-icons design-2_ruler-pencil"></i></a></td>
                                  <td><a href="../admin/pages/tables/delete.php?tabel=transport_type&kol=id_trans_type&hlm=tb_type&id=<?php echo $data_pgn['id_trans_type']; ?>"><i class="now-ui-icons ui-1_simple-remove"></i></a></td>
                                </tr>
              </tr>
        <?php } ?>
              </tbody>
          </table>
        </div>
      </div>

              <div class="card-footer">
              <?php
                                $viewing_num = $run_crud->page_numering_nosearch($batasan, 'transport_type');
                                
                                for($ca=1;$ca<=$viewing_num;$ca++)
                                {
                                    if($ca != $halamanan)
                                    {
                                        
                                        echo "
                                        <a  href=$_SERVER[PHP_SELF]?page=tb_type&ke=$ca>$ca</a> |
                                        ";
                                    }
                                    else
                                    {
                                        
                                        echo "<b>$ca</b> |";
                                    }
                                }
                                
                                ?>
              </div>

            </div>
          </div>
        <?php 
        } ?>

        
        
        </div>
      </div>