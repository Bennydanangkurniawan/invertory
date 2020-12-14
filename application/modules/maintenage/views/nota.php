
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

<title>Serah Terima Barang</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<page size="A4">
  <div class="container">
    <br>
    <table  width='100%'  >
    <tr>
      <td width='10%'> <img src="<?php echo base_url('assets/kab.png'); ?>" width='100' height='120' alt=""> </td>

      <td align='center'>
        <table>
          <tr >
            <td align='center'>  <h4>RUMAH SAKIT UMUM DAERAH</h4></td>
          </tr>
          <tr>
            <td align='center'  >  <h3>WARAS WIRIS</h3></td>
          </tr>
          <tr>
            <td>Jalan Karanggede-Gemolong KM 13 Boyolali Jawa Tengah</td>
          </tr>
        </table>

      </td>

    </tr>
    <tr>
      <td colspan="2"> <hr> </td>



    </tr>
    <tr>
        <td colspan="2" align='center'> <b> <u>NOTA BUKTI PERBAIKAN</u> </b> <br> <br> </td>
    </tr>
    <tr>
      <!-- <td colspan="2" > <p>&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Pada hari ini Tanggal <b><?php echo $data[0]->tgl_distribusi ?></b> Telah diterima dari Berupa:</p> </td> -->
    </tr>

    <tr>
    <td  colspan="2" align='center' >
      <table width=100% border="1">
        <tr>
      <td width='30%'>Ruang/Unit</td>
      <td><?php echo $data[0]->nama_ruang; ?></td>
    </tr>
    <tr>
      <td>Penanggung Jawab:</td>
      <td><?php echo $data[0]->nama_pegawai; ?></td>
    </tr>
    <tr>
      <td>Nama Perangkat/Alat:</td>
      <td><?php echo $data[0]->nama_barang; ?></td>
    </tr>

    <tr>
      <td>Tgl Maintenage:</td>
      <td><?php echo $data[0]->tgl_maintenage; ?></td>
    </tr>
    <tr>
      <td>Deskripsi:</td>
      <td><?php echo $data[0]->keterangan; ?></td>
    </tr>
    <!-- <tr>
      <td>Biaya:</td>
      <td><?php echo  "Rp " . number_format($data[0]->cost,2,',','.');?></td>
    </tr> -->

      </table>
</td>
</tr>
    <tr>
      <td  colspan="2" align='center' >
<table width='100%'>
  <tr align='center'>
    <td width='25%'>
Tenaga/ Tim Teknis

<br> <br><br>

(_______________)
    </td>

    <td width='25%'>
Koor Lapangan

<br> <br><br>

(_______________)
    </td>

    <td width='25%'>
Ka.

<br> <br><br>

(_______________)
    </td>

    <td width='25%'>
User

<br> <br><br>

(_______________)
    </td>
  </tr>

</table>

       </td>
    </tr>
  <tr>
    <td colspan="2">

    </td>
  </tr>
    </table>
  </div>


</page>
<script type="text/javascript">
  window.print();
</script>
