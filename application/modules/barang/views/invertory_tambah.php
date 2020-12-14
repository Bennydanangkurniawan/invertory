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
                <th>Kode</th>
                <th>Nama</th>
                <th> Pegawai</th>
                <th>Lokasi</th>
                <th>Jumlah</th>

                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th> Pegawai</th>
                <th>Lokasi</th>
                <th>Jumlah</th>

                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $k->kode_asset ?></td>

                  <td><?php echo $k->nama_barang ?></td>
                    <td><?php echo $k->nama_pegawai ?></td>
                  <td> <span class="fa fa-home" ></span> <?php echo $k->nama_ruang ?></td>
                  <td><?php echo $k->jumlah ?></td>




                  <td>
                    <a  class="btn btn-success" href="<?php echo base_url('barang/from_invertory/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-globe "></span> Distribusi </a>

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
