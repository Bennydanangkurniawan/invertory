<main>
  <div class="container-fluid">
    <br>
    <a  class="btn btn-success" href="<?php echo base_url('perolehan/cetak_semua') ?>"> <span class="fa fa-print"></span>  Cetak Data </a>

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
                <th>Petugas</th>
                <th>Desa</th>
                <th>Tps</th>
                <th>M. SAID HIDAYAT, SH & WAHYU IRAWAN, SH</th>
                <th>KOLOM KOSONG</th>

                <th>Suara Tidak Sah</th>
                <th>Jumlah</th>
                <!-- <th>Tools</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Desa</th>
                <th>Tps</th>
                <th>M. SAID HIDAYAT, SH & WAHYU IRAWAN, SH</th>
                <th>KOLOM KOSONG</th>

                <th>Suara Tidak Sah</th>
                <th>Jumlah Suara</th>
                <!-- <th>Tools</th> -->
              </tr>
            </tfoot>
            <tbody>

              <?php $paslon_1=0; $paslon_2=0; $jumlah_suara = 0; $suarasah =0; $suaratidaksah=0; $suara=0; $no=0; foreach ($user as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $k->nama_pengguna ?> </td>
                  <td><?php echo $k->nama_desa ?></td>
                  <td><?php echo $k->no_tps ?></td>

                  <td><?php echo $k->paslon_1; $paslon_1 += $k->paslon_1;?></td>
                  <td><?php echo $k->paslon_2; $paslon_2 +=$k->paslon_2; ?></td>
                        <td><?php echo $k->suaratak_sah; $suarasah +=$k->suaratak_sah; ?></td>
                                <!-- <td><?php echo $k->suaratak_sah; $suaratidaksah +=$k->suaratak_sah; ?></td> -->

                  <td><?php echo ($k->paslon_1+$k->paslon_2+$k->suaratak_sah); $jumlah_suara += $k->paslon_1+$k->paslon_2+$k->suaratak_sah ?></td>
<!--
                  <td>
                    <a  class="btn btn-warning" href="<?php echo base_url('perolehan/inputsuara/'.$k->id_user) ?>"> <span class="fa fa-edit"></span> Input </a>


                  </td> -->
                </tr>

              <?php endforeach; ?>


            </tbody>
          </table>

          <a href="<?php echo base_url('perolehan/list_semua') ?>" class="btn btn-success"> <span class="fa fa-file"></span> Lihat Seluruh Laporan Suara</a>
      <br> <br>
      <table class="table table-bordered">
      <thead>
      <tr>



        <th> M. SAID HIDAYAT, SH & WAHYU IRAWAN, SH</th>
              <th> KOLOM KOSONG</th>
          <th> SUARA SAH</th>
            <th> SUARA TIDAK SAH</th>
      <th>JUMLAH SELURUH SUARA</th>
      </tr>
      </thead>
      <tbody>
      <tr>

      <td><b><?php echo $paslon_1;  ?></b></td>
        <td><b><?php echo $paslon_2;  ?></b></td>
          <td><b><?php echo $suaratidaksah;  ?></b></td>
          <td><b><?php echo $jumlah_suara;  ?></b></td>
      <td><b><?php echo $jumlah_suara;  ?></b></td>
      </tr>
      </tbody>

      </table>






      </div>
    </div>
  </div>
</div>
</main>
