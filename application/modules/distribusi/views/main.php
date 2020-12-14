<main>
  <div class="container-fluid">



    <br>

    <a href="<?php echo base_url('distribusi/tambah') ?>" class="btn btn-primary"> <span class="fa fa-plus"></span> Tambah</a>
        <a href="<?php echo base_url('barang') ?>" class="btn btn-success"> <span class="fa fa-cog"></span> Barang</a>

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
                <th>Stock</th>
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
                <th>Stock</th>
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
                  <td><?php
                  $CI=&get_instance();
                  $CI->load->library('distribusi');
                  $CI->distribusi->cek_stock($k->id_barang);
                   ?></td>



                  <td>
                    <a  class="btn btn-secondary" href="<?php echo base_url('distribusi/edit/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-edit"></span> </a>

                    <a  class="btn btn-danger" href="<?php echo base_url('distribusi/hapus/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-eraser"></span> </a>

                    <a  class="btn btn-success" href="<?php echo base_url('distribusi/serah_terima/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-file"></span> </a>
                    <a  class="btn btn-warning" href="<?php echo base_url('distribusi/serah_terima2/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-file"></span> </a>

                    <a  class="btn btn-primary" href="<?php echo base_url('distribusi/kartu_rawat/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-leaf"></span> </a>
                    <a  class="btn btn-danger" href="<?php echo base_url('maintenage/tambah') ?>"> <span class="fa fa-cog"></span> </a>

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
