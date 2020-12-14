<main>
  <div class="container-fluid">
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
                <th>TPS</th>
                  <th>DPT</th>
                    <th>DPTHP</th>
                      <th>DATA SUARA</th>
                            <th>DATA SUARA SAH</th>
                          <th>DATA PEROLEHAN</th>
                              <th>FOTO BUKTI</th>



                <!-- <th>Tools</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Petugas</th>
                <th>Desa</th>
                <th>TPS</th>

                <th>DPT</th>
                  <th>DPTHP</th>
                    <th>DATA SUARA</th>
                      <th>DATA SUARA SAH</th>
                        <th>DATA PEROLEHAN</th>
                            <th>FOTO BUKTI</th>

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


<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('dt_pemilih',$k->id_user);
?></td>

<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('hp_pemilih',$k->id_user);
?></td>



<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('suara',$k->id_user);
?></td>



<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('suara_sah',$k->id_user);
?></td>


<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('perolehan',$k->id_user);
?></td>


<td> <?php
$CI =& get_instance();
$CI->load->library('dashboard');
$CI->dashboard->cek_data('foto',$k->id_user);
?></td>

                </tr>

              <?php endforeach; ?>


            </tbody>
          </table>








      </div>
    </div>
  </div>
</div>
</main>
