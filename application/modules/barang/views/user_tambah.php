<main>
  <div class="container-fluid">
<br>
    <a href="<?php echo base_url('barang/user_tambah') ?>" class="btn btn-primary"> <span class="fa fa-user"></span> Distribusi Pegawai</a>
    <a href="<?php echo base_url('barang/invertory_tambah') ?>" class="btn btn-danger"> <span class="fa fa-cog fa fa-spin"></span> Distribusi Invertory</a>
    <!-- <a href="<?php echo base_url('barang/sparepart') ?>" class="btn btn-link"> <span class="fa fa-cog fa-spin"></span> Sparepart /BHP/ ALKES</a>
  <a href="<?php echo base_url('barang') ?>" class="btn btn-success"> <span class="fa fa-file"></span> Barang</a> -->
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
                <th>NIP</th>
                <th>Nama</th>

                <th>Jabatan</th>

                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>

                <th>Jabatan</th>

                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $k->nip ?></td>
                  <td><?php echo $k->nama_pegawai ?></td>

                  <td><?php echo $k->jabatan ?></td>

                  <td>
                    <a  class="btn btn-success" href="<?php echo base_url('barang/from_pegawai/') ?><?php echo $k->id_pegawai ?>"> <span class="fa fa-globe "></span> Distribusi </a>


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
