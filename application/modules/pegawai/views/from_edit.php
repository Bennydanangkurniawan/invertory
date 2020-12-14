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


<form  action="<?php echo base_url('pegawai/proses_edit') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama pegawai:</label>
            <input type="text" class="form-control" id="nama_pegawai" value="<?php echo $datas[0]->nama_pegawai ?>" name="nama_pegawai" required>
            <input type="hidden" class="form-control" id="id" value="<?php echo $datas[0]->id_pegawai ?>" name="id" required>

          </div>

          <div class="form-group">
            <label for="nama_pengguna">NIP:</label>
            <input type="text" class="form-control" value="<?php echo $datas[0]->nip ?>" id="nip" name="nip" placeholder="Masukan NIP pegawai" required>
          </div>

          <div class="form-group">
            <label for="nama_pengguna">Pangkat / Golongan:</label>
            <input type="text" class="form-control" id="pangkat" name="pangkat" value="<?php echo $datas[0]->pangkat ?>" placeholder="Masukan Pangkat Golongan" required>
          </div>
          <div class="form-group">
            <label for="nama_pengguna">Jabatan:</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="<?php echo $datas[0]->jabatan ?>" placeholder="Masukan Jabatan" required>
          </div>






          <div class="form-group">

            <input type="submit" class="btn btn-primary form-control block"  name="submit">

              <input type="reset" class="btn btn-warning form-control block"  name="reset">

          </div>


</form>


<script type="text/javascript">




</script>
        </div>
      </div>
    </div>
  </div>
</main>
