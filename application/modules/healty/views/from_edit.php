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


          <form  action="<?php echo base_url('distribusi/proses_edit') ?>" method="POST">


            <div class="form-group">
              <label for="nama_pengguna">Kode Asset:</label>
              <input type="text" class="form-control" value="<?php echo $datas[0]->kode_asset ?>" id="kode_asset" name="kode_asset" placeholder="Masukan Kode Assets" required>
              <input type="hidden" class="form-control" value="<?php echo $datas[0]->id_distribusi ?>" id="id" name="id" placeholder="Masukan Kode Assets" required>

            </div>

            <div class="form-group">
              <label for="nama_pengguna">Pilih Barang:</label>
                    <select id="id_barang" name="id_barang" class="form-control">
                      <option value="<?php echo $datas[0]->id_barang ?>">--<?php echo $datas[0]->nama_barang ?>--</option>
                      <?php foreach ($barang as $k): ?>
                          <option value="<?php echo $k->id_barang ?>">(code-<?php echo $k->id_barang ?>) |<?php echo $k->nama_barang ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Jumlah Barang:</label>
              <input type="number" class="form-control" id="jumlah" value="<?php echo $datas[0]->jumlah ?>" name="jumlah" placeholder="Masukan Jumlah Barang"required>
            </div>

            <div class="form-group">
              <label for="nama_pengguna">Admin Penginput:</label>
              <input type="text" class="form-control" value="<?php echo $nama_pengguna ?>" id="alamat" name="name_admin" readonly>
                  <input type="hidden" class="form-control"  value="<?php echo $id_user ?>" id="id_user" name="id_user" required>
            </div>



            <div class="form-group">
              <label for="nama_pengguna">Pilih Pegawai:</label>
                    <select id="id_pegawai" name="id_pegawai" class="form-control">
                      <option value="<?php echo $datas[0]->id_pegawai ?>">--<?php echo $datas[0]->nama_pegawai ?>--</option>
                      <?php foreach ($pegawai as $k): ?>
                          <option value="<?php echo $k->id_pegawai ?>">(ID-<?php echo $k->id_pegawai ?>) |<?php echo $k->nama_pegawai ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


            <div class="form-group">
              <label for="nama_pengguna">Posisi Barang:</label>
                    <select id="id_ruang" name="id_ruang" class="form-control">
                      <option value="<?php echo $datas[0]->id_ruang ?>">--<?php echo $datas[0]->nama_ruang ?>--</option>
                      <?php foreach ($ruang as $k): ?>
                          <option value="<?php echo $k->id_ruang ?>">(code-<?php echo $k->id_ruang ?>) |<?php echo $k->nama_ruang ?></option>
                      <?php endforeach; ?>
                  </select>
            </div>


                        <div class="form-group">
                          <label for="nama_pengguna">Tanggal distribusi:</label>
                          <input type="date"  value="<?php echo $datas[0]->tgl_distribusi ?>" class="form-control"  name="tgl_distribusi" placeholder="Masukan Jumlah Barang"required>
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
