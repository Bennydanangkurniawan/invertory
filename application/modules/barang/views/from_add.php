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


          <form  action="<?php echo base_url('barang/proses_tambah') ?>" method="POST">


            <div class="form-group">
              <label for="nama_pengguna">Nomor Faktur:</label>
              <input type="text" class="form-control" id="no_faktur" name="no_faktur" placeholder="Masukan Faktur Jika Tidak Ada cukup '0' atau '-'" required>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Nama barang:</label>
              <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukan Nama Barang" required>
            </div>

            <div class="form-group">
              <label for="nama_pengguna">Jenis Barang:</label>
                    <select id="kd_jenis" name="id_jenis" class="form-control">
                      <option value="0">--PILIH JENIS BARANG--</option>
                      <?php foreach ($kd_jenis as $k): ?>
                          <option value="<?php echo $k->id_jenis ?>"><?php echo $k->nama_jenis ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Kategory Barang:</label>
                    <select id="kd_kategory" name="id_kategory" class="form-control">
                      <option value="0">--PILIH KATEGORY BARANG--</option>
                      <?php foreach ($kd_kategory as $k): ?>
                          <option value="<?php echo $k->id_kategory ?>"><?php echo $k->nama_kategory ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>



            <div class="form-group">
              <label for="nama_pengguna">Satuan Barang:</label>
                    <select id="id_satuan" name="id_satuan" class="form-control">
                      <option value="0">--PILIH SATUAN BARANG--</option>
                      <?php foreach ($kd_satuan as $k): ?>
                          <option value="<?php echo $k->id_satuan ?>"><?php echo $k->nama_satuan ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Tanggal Pembelian:</label>
              <input type="date" class="form-control" id="tgl_pembelian" name="tgl_pembelian" required>
            </div>

            <div class="form-group">
              <label for="nama_pengguna">Tanggal Produk:</label>
              <input type="date" class="form-control" id="tgl_produk" name="tgl_produk" required>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Suplayer Penyedia:</label>
                    <select id="id_suplayer" name="id_suplayer" class="form-control">
                      <option value="0">--PILIH SALAH SATU--</option>
                      <?php foreach ($suplayer as $k): ?>
                          <option value="<?php echo $k->id_suplayer ?>"><?php echo $k->nama_suplayer ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Jumlah Barang:</label>
              <input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" placeholder="Jumlah barang yang terbeli." required>
            </div>



            <div class="form-group">
              <label for="nama_pengguna">Posisi Barang:</label>
                    <select id="id_ruang" name="id_ruang" class="form-control">
                      <option value="0">--PILIH SALAH SATU--</option>
                      <?php foreach ($ruang as $k): ?>
                          <option value="<?php echo $k->id_ruang ?>"><?php echo $k->nama_ruang ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Deskripsi Keadaan Barang:</label>

            <textarea name="deskripsi" class="form-control" rows="8" cols="80"></textarea>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Harga Pembelian:</label>
              <input type="number" class="form-control" id="harga_pembelian" name="harga_pembelian" placeholder="Perkiraan Harga Pembelian Per @." required>
            </div>

            <div class="alert alert-success">
               Masukan Nilai Perkiraan Penurunan Asset Barang Tersebut dalam Satu Tahun misalkan Barang X dalam setahuan berkurang 10% maka tuliskan 10
            </div>
            <div class="form-group">
              <label for="nama_pengguna">Perkiraan Penurunan Aset Per- Tahun:</label>
              <input type="number" class="form-control" id="penurunan_aset" name="penurunan_aset" placeholder="Perkiraan Penurunan Pertahun (%)." required>
            </div>

            <div class="alert alert-warning">
               Jika Barang Tersebut memerlukan Maintenage/ Kalibrasi Maka Tentukan Berdasarkan Interval Jadwal Maintenage Barang tersebut
            </div>

            <div class="form-group">
              <label for="nama_pengguna">Jadwal Maintenage/Kalibrasi:</label>
              <input type="number" class="form-control" id="maintenage" name="maintenage" max="12" placeholder="Jadwal Maintenage (Bulan)" required>
            </div>

            <div class="alert alert-warning">
              <strong>Perhatian!</strong> Apakah Barang Tersebut Merupakan Assets? Perlu Maintenage
            </div>
            <div class="form-group">
              <label for="nama_pengguna">Apakah Termasuk Barang Assets:</label>
              <select class="form-control" name="asset">
                <option value="1">Barang Asset</option>
                    <option value="0">Sparepart/BHP/DLL</option>
              </select>
            </div>

            <div class="form-group">

              <input type="submit" class="btn btn-primary form-control block"  name="submit">

              <input type="reset" class="btn btn-warning form-control block"  name="reset">

            </div>


          </form>


        </div>
      </div>
    </div>
  </div>
</main>
