<main>
  <div class="container-fluid">



    <br>

    <a href="<?php echo base_url('maintenage') ?>" class="btn btn-primary"> <span class="fa fa-forward"></span> Kembali</a>
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

                <th>Foto</th>

              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tgl Maintenage</th>

                <th>Foto</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td> <span class="fa fa-calendar"></span> <?php echo $k->tgl_maintenage ?></td>
                  <td> <img src="<?php echo base_url() ?>uploads/<?php echo $k->foto ?>" alt=""> </td>

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
