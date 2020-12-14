
<style media="screen">
body {
  background: rgb(204,204,204);
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-top: 0.5cm;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {
  width: 21cm;
  height: 29.7cm;
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>


<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

// echo tgl_indo(date('Y-m-d')); // 21 Oktober 2017
//
// echo "<br/>";
// echo "<br/>";
//
// echo tgl_indo("1994-02-15"); // 15 Februari 1994
?>
<title>Serah Terima Barang</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<page size="A4">
  <div class="container">
    <br>
    <table  width='100%'  >
      <tr>
        <td width='10%'> <img src="<?php echo base_url('assets/kab.png'); ?>" width='90' height='110' alt=""> </td>

        <td align='center'>
          <table  width='100%'>
            <tr >
              <td align='center'>  <h5>PEMERINTAH KABUPATEN BOYOLALI</h5></td>
            </tr>
            <tr>
              <td align='center'  >  <h4>RUMAH SAKIT UMUM DAERAH WARAS WIRIS</h4></td>
            </tr>
            <tr>
              <td align='center' > <h6> Jl. Karanggede -  Gemolong KM 13, Andong, Boyolali 57384 Prov. Jawa Tengah Telp./Fax (0271) 2933001/ 2933000 Web: www.rsudwaraswiris.boyolali.go.id  email:rsudwaraswiris@boyolali.go.id</h6> </td>
            </tr>
          </table>

        </td>

      </tr>
      <tr>
        <td colspan="2"> <hr> </td>



      </tr>
      <tr>
        <td colspan="2" align='center'> <b> <u>REKAPITULASI STOCK BARANG SPAREPART/BHP/ATK/DLL</u> </b>
          <p>Nomor:........./......./4.22/2020</p>
          <br> </td>
        </tr>

        <tr>
          <td colspan="2" align='center'>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Faktur</th>
                  <th>Nama barang</th>
                  <th>Suplayer</th>
                  <th>Lokasi Barang</th>
                  <th>Tanggal Pembelian</th>
                  <th>Jumlah Pembelian</th>
                  <th>Stock</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Faktur</th>
                  <th>Nama barang</th>
                  <th>Suplayer</th>
                  <th>Lokasi Barang</th>
                  <th>Tanggal Pembelian</th>
                  <th>Jumlah Pembelian</th>
                  <th>Stock</th>

                </tr>
              </tfoot>
              <tbody>

                <?php $no=0; foreach ($data as $k): $no++; ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $k->no_faktur ?></td>
                    <td><?php echo $k->nama_barang ?></td>
                    <td><?php echo $k->nama_suplayer ?></td>
                    <td> <span class="fa fa-home"></span> <?php echo $k->nama_ruang ?></td>
                    <td><?php echo $k->tgl_pembelian ?></td>
                    <td><?php echo $k->jumlah_barang ?></td>
                    <td><?php
                    $CI=&get_instance();
                    $CI->load->library('barang');
                    $CI->barang->cek_stockbhpct($k->id_barang);
                    ?></td>

                  </tr>

                <?php endforeach; ?>


              </tbody>
            </table>

          </td>
        </tr>



        <tr>
          <td colspan="2" align='center'>



          </td>
        </tr>



        <tr>
          <td colspan="2" align='right' >
            <table width='30%' >
              <tr>
                <td  align='center' >Boyolali,     &emsp; &emsp; &emsp; &emsp; <?php echo date('M') ?> <?php echo date('Y') ?>
                  <br> Direktur RSUD Waras Wiris <br> Kabupaten BOYOLALI <br> <br> <br> <br>
                  <b> <u>dr. PUJI ASTUTI</u> </b> <br>Pembina <br>NIP. 19700822 200801 2 010

                </td>
              </tr>
            </table>
<br> <br>
          </td>
        </tr>








        <tr>
          <td colspan="2" >


          </td>
        </tr>


      </table>
    </div>


  </page>
  <script type="text/javascript">
  // window.print();
</script>
