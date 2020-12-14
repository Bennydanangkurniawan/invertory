<main>
    <div class="container-fluid">
        <!-- <h1 class="mt-4"><?php echo $nama_menu ?> - <?php echo $nama_pengguna ?></h1> -->

        <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard Panel Center Kec. Andong    </li>
        </ol> -->

        <!-- <a class="btn btn-primary btn-sm" href="<?php echo base_url('dashboard/inputcek'); ?>"><span class="fa fa-key"></span> Input Check</a> -->
        <br> <br>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"> <span class="fa fa-home"></span><?php echo $semua_barang[0]->jumlah ?> Barang</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body"> <span class="fa fa-user"></span> <?php echo $semua_distribusi[0]->jumlah ?> Terdistribusi</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                      <div class="card-body"> <span class="fa fa-file"></span> <?php echo $semua_maintenage[0]->jumlah ?> Maintenage</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body"> <span class="fa fa-camera"></span> Foto </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
              <div class="card mb-4">
                  <div class="card-header">
                      <i class="fas fa-chart-bar mr-1"></i>
                      Barang Invertory
                  </div>
                  <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
              </div>
          </div>
            <div class="col-xl-12">
                <div class="card mb-4">
                    <!-- <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                      x
                    </div> -->
                    <!-- <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div> -->
<!-- <div class="card-body">
                    <canvas id="lineChart"></canvas>
                  </div> -->
                </div>
            </div>

        </div>

    </div>
