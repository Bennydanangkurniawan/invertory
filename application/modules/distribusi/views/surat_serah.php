
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
        <td colspan="2" align='center'> <b> <u>SERAH PERINTAH PENYERAHAN BARANG</u> </b>
          <p>Nomor:........./......./4.22/2020</p>
          <br> </td>
        </tr>
        <tr>
          <td colspan="2" > <p>&emsp; Yang bertanda tangan di bawah ini Direktur RSUD Waras Wiris Kelas D Kabupaten Boyolali</p> </td>
        </tr>
        <tr>
          <td colspan="2" align='center'> <b> <u>MEMERINTAHKAN KEPADA</u> </b> <br>

          </td>
        </tr>

        <tr>
          <td colspan="2" > <p>&emsp; Bendahara Barang/Penyimpan Barang untuk menyerahkan sebuah barang asset RSUD Waras Wiris dengan kondisi baik kepada:</p> </td>
        </tr>

        <tr>
          <td colspan="2" align='center'>

            <table width='80%'>
              <tr>
                <td>Nama </td>
                <td>: </td>
                <td><?php echo $data[0]->nama_pegawai; ?> </td>
              </tr>

              <tr>
                <td>NIP </td>
                <td>: </td>
                <td><?php echo $data[0]->nip; ?> </td>
              </tr>

              <tr>
                <td>Pangkat, Golongan </td>
                <td>: </td>
                <td><?php echo $data[0]->pangkat; ?> </td>
              </tr>

              <tr>
                <td>Jabatan </td>
                <td>: </td>
                <td><?php echo $data[0]->jabatan; ?> </td>
              </tr>

              <tr>
                <td> </td>
                <td> </td>
                <td>RSUD Waras Wiris Kabupaten Boyolali. </td>
              </tr>
            </table>

          </td>
        </tr>

        <tr>
          <td colspan="2" > <br> <p>Demikian untuk dilaksanakan dengan sebaik-baiknya.</p> </td>
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
          <td colspan="2">

            <table width='100%' border="1">
              <tr>
                <td width='5%'> <b>No</b> </td>
                <td width='30%' > <b>Jenis Barang</b> </td>
                <td width='25%' > <b>Harga Perolehan</b> </td>
                <td width='40%'> <b>Keterangan</b> </td>
              </tr>


              <tr>
                <td> 1  <br> </td>
                <td> <?php echo $data[0]->nama_barang ?>  <br>  </td>
                <td><?php echo  "Rp " . number_format($data[0]->harga_pembelian,2,',','.');?> <br> </td>
                <td> Tanggal dan Tahun Perolehan <?php echo tgl_indo($data[0]->tgl_pembelian) ?>  <br> </td>

              </tr>



            </table>
          </td>
        </tr>

        <tr>
          <td colspan="2" > <br>  <p>&emsp; Barang-barang tersebut di atas dikeluarkan dan diterima dalam keadaan baik</p> </td>
        </tr>


        <tr>
          <td colspan="2" >
            <table width='100%' >

              <tr>
                <td align='center' >
                  Yang Menerima <br> <br> <br>
<br>
<br> <br>
                  <b> <u> <?php echo $data[0]->nama_pegawai?></u> </b> <br>
                  NIP. <?php echo $data[0]->nip ?>
                </td>

                <td align='center' >
                  Yang Menyerakan <br>  Pengurus Barang<br> RSUD Waras Wiris<br>
<br>
<br>
<br>

<?php

$CI=&get_instance();
$CI->load->library('distribusi');
$CI->distribusi->cek_pegawai($data[0]->id_pegawai_menyerahkan);


 ?>

                </td>


              </tr>
            </table>

          </td>
        </tr>


      </table>
    </div>


  </page>
  <script type="text/javascript">
  window.print();
</script>
