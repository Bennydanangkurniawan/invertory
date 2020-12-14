<main>
  <div class="container-fluid">



    <br>


        <a href="<?php echo base_url('maintenage/tambah') ?>" class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah</a>
          <a href="<?php echo base_url('maintenage/foto') ?>" class="btn btn-secondary"> <span class="fa fa-camera"></span> Foto</a>
                  <a href="<?php echo base_url('healty') ?>" class="btn btn-success"> <span class="fa fa-leaf"></span> Healty</a>
    <br>
    <br>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        <?php echo $nama_menu ?>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Tgl Maintenage</th>
                <th>Nama Barang</th>
                <th>Nama Pegawai</th>
                <th>Jenis Maintenage</th>
                <th>Cost</th>

                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tgl Maintenage</th>
                <th>Nama Barang</th>
                <th>Nama Pegawai</th>
                <th>Jenis Maintenage</th>
                <th>Cost</th>
                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td> <span class="fa fa-calendar"></span> <?php echo $k->tgl_maintenage ?></td>
                  <td><?php echo $k->nama_barang ?></td>
                  <td> <span class="fa fa-user"></span> <?php echo $k->nama_pegawai ?></td>
                  <td> <span class="fa fa-cog"></span> <?php echo $k->nama_jenis_maintenage ?></td>
                  <td><?php


                  echo  "Rp " . number_format($k->cost,2,',','.');



                  ?></td>

                  <td>
                    <a  class="btn btn-secondary" href="<?php echo base_url('maintenage/edit/') ?><?php echo $k->id_maintenage ?>"> <span class="fa fa-edit"></span> </a>

                    <a  class="btn btn-danger" href="<?php echo base_url('maintenage/hapus/') ?><?php echo $k->id_maintenage ?>"> <span class="fa fa-eraser"></span> </a>
                    <a  class="btn btn-success" href="<?php echo base_url('maintenage/nota/') ?><?php echo $k->id_maintenage ?>"> <span class="fa fa-list"></span> </a>

                  </td>
                </tr>

              <?php endforeach; ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
