<main>
  <div class="container-fluid">
<br>
    <a href="<?php echo base_url('barang/user_tambah') ?>" class="btn btn-primary"> <span class="fa fa-user"></span> Distribusi Pegawai</a>
    <a href="<?php echo base_url('barang/invertory_tambah') ?>" class="btn btn-danger"> <span class="fa fa-cog fa fa-spin"></span> Distribusi Invertory</a>
    <a href="<?php echo base_url('barang/sparepart') ?>" class="btn btn-link"> <span class="fa fa-cog fa-spin"></span> Sparepart /BHP/ ALKES</a>
  <a href="<?php echo base_url('barang') ?>" class="btn btn-success"> <span class="fa fa-file"></span> Barang</a>

    <br>
<br>

    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        <?php echo $nama_menu ?>
      </div>
      <div class="card-body">
        <div class="table-responsive">


          <form  action="<?php echo base_url('barang/proses_distripegawai') ?>" method="POST">


            <div class="form-group">
              <label for="nama_pengguna">Nama pegawai:</label>
              <input type="text" class="form-control" id="nama_pegawai" value="<?php echo $pegawai[0]->nama_pegawai ?>" name="nama_pegawai" placeholder="Masukan Nama Pegawai" readonly>
              <input type="hidden" class="form-control" id="id" value="<?php echo $pegawai[0]->id_pegawai ?>" name="id_pegawai" placeholder="Masukan Nama Pegawai" readonly>

            </div>

            <div class="form-group">
              <label for="nama_pengguna">Tgl Distri:</label>
              <input type="date" class="form-control" id="id" value="<?php echo date('Y-m-d') ?>" name="tgl_distribusi" placeholder="Masukan Nama Pegawai" readonly>

            </div>


            <div class="form-group">
              <label for="nama_pengguna">Jenis Barang:</label>
              <select id="id_barang" name="id_barang" class="form-control">
                <option value="0">--PILIH SALAH SATU--</option>
                <?php foreach ($barang as $k): ?>
                  <option value="<?php echo $k->id_barang ?>">

                    <?php
                    $CI=&get_instance();
                    $CI->load->library('barang');
                    $CI->barang->cek_stockbhplist($k->id_barang);
                    ?>|
                    <?php echo $k->nama_barang ?>

                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="jumlah">Jumlah:</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah " required>
            </div>






            <div class="form-group">

              <input type="submit" class="btn btn-primary form-control"  name="submit">

              <input type="reset" class="btn btn-warning form-control"  name="reset">

            </div>


          </form>





        </div>

      </div>

    </div>
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
                <th>Tgl Transaksi</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tgl Transaksi</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tools</th
                </tr>
              </tfoot>
              <tbody>

                <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $k->tgl_distribusi ?></td>
                      <td><?php echo $k->nama_barang ?></td>
                            <td><?php echo $k->jumlah ?></td>

                <td>
                <!-- <a  class="btn btn-secondary" href="<?php echo base_url('jenis/edit/') ?><?php echo $k->id_distribusibhp ?>"> <span class="fa fa-edit"></span> </a> -->

                <a  class="btn btn-danger" href="<?php echo base_url('barang/hapus_bhp/') ?><?php echo $k->id_distribusibhp ?>/<?php echo $k->id_pegawai ?>"> <span class="fa fa-eraser"></span> </a>

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
