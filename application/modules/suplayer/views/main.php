<main>
  <div class="container-fluid">



    <br>

    <a href="<?php echo base_url('suplayer/tambah') ?>" class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah</a>
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
                <th>Nama suplayer</th>
                <th>Alamat</th>
                <th>No Telp/ Wa</th>

                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama suplayer</th>

                <th>Alamat</th>
                <th>No Telp/ Wa</th>
                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $k->nama_suplayer ?></td>
                  <td><?php echo $k->alamat ?></td>
                  <td><?php echo $k->no_telp ?></td>

                  <td>
                    <a  class="btn btn-secondary" href="<?php echo base_url('suplayer/edit/') ?><?php echo $k->id_suplayer ?>"> <span class="fa fa-edit"></span> </a>

                    <a  class="btn btn-danger" href="<?php echo base_url('suplayer/hapus/') ?><?php echo $k->id_suplayer ?>"> <span class="fa fa-eraser"></span> </a>

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
