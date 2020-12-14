<main>
  <div class="container-fluid">



    <br>

    <a href="<?php echo base_url('maintenage') ?>" class="btn btn-primary"> <span class="fa fa-cog"></span> Maintenage</a>
        <a href="<?php echo base_url('barang') ?>" class="btn btn-success"> <span class="fa fa-list"></span> Barang</a>
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
                <th>Nama Barang</th>
                <th>Lokasi Barang</th>
                <th>Harga Pembelian</th>
                    <th>Jumlah Barang</th>
                <th>Penurunan</th>
                              <th>Tahun Pembelian</th>
                                <th>Cost Perawatan</th>
                  <th>Sisa Harga Asset</th>

                <th>Tools</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Lokasi Barang</th>
                <th>Harga Pembelian</th>
                      <th>Jumlah Barang</th>
                <th>Penurunan</th>
                  <th>Tahun Pembelian</th>
                        <th>Cost Perawatan</th>
                  <th>Sisa Harga Asset</th>

                <th>Tools</th>
              </tr>
            </tfoot>
            <tbody>

              <?php $no=0; foreach ($data as $k): $no++; ?>

                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $k->kode_asset ?></td>

          <td><?php echo $k->nama_barang ?></td>
                  <td> <span class="fa fa-home" ></span> <?php echo $k->nama_ruang ?></td>

                    <td><?php echo  "Rp " . number_format($k->harga_pembelian,2,',','.');?></td>


                  <td><?php echo $k->jumlah ?></td>
                    <td><?php echo $k->penurunan_aset ?> %</td>
                          <td><?php echo $k->tahun_beli ?></td>

                          <td><?php
                          $CI=&get_instance();
                          $CI->load->library('healty');
                          $CI->healty->cek_cost($k->id_barang);
                           ?></td>
<td><?php

$harga_pembelian =$k->harga_pembelian;
$penurunan_asset = $k->penurunan_aset;
$lama_pembelian =  date('Y')-$k->tahun_beli;
$cost = (($harga_pembelian * $penurunan_asset)/100)*$lama_pembelian;
$harga_total = ($harga_pembelian - $cost )* $k->jumlah;
echo  "Rp " . number_format($harga_total,2,',','.');

?></td>


                  <td>

                    <a  class="btn btn-primary" href="<?php echo base_url('distribusi/serah_terima/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-file"></span> </a>
                    <a  class="btn btn-success" href="<?php echo base_url('distribusi/kartu_rawat/') ?><?php echo $k->id_distribusi ?>"> <span class="fa fa-leaf"></span> </a>

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
