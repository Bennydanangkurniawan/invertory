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


          <form enctype="multipart/form-data"  action="<?php echo base_url('maintenage/proses_edit') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Tanggal Maintenage:</label>
            <input type="date" value="<?php echo $data[0]->tgl_maintenage;?>" class="form-control" id="tgl_maintenage" name="tgl_maintenage" required>
                        <input type="hidden" value="<?php echo $data[0]->id_maintenage;?>" class="form-control" id="id" name="id" required>
          </div>
          <div class="form-group">
            <label for="nama_pengguna">Barang Terdistribusi:</label>
                  <select id="id_distribusi" name="id_distribusi" class="form-control">
                    <option value="<?php echo $data[0]->id_distribusi ?>">--<?php echo $data[0]->nama_barang ?>--</option>
                    <?php foreach ($distribusi as $k): ?>
                        <option value="<?php echo $k->id_distribusi ?>"><?php echo $k->nama_barang ?>| <?php echo $k->nama_pegawai ?> | <?php echo $k->nama_ruang ?>| <?php echo $k->kode_asset ?></option>
                    <?php endforeach; ?>
                </select>
          </div>


          <div class="form-group">
            <label for="nama_pengguna">Jenis Perawatan:</label>
                  <select id="id_jenis_maintenage" name="id_jenis_maintenage" class="form-control">
                    <option value="<?php echo $data[0]->id_jenis_maintenage ?>">--<?php echo $data[0]->nama_jenis_maintenage ?>--</option>
                    <?php foreach ($jenis_maintenage as $k): ?>
                        <option value="<?php echo $k->id_jenis_maintenage?>"><?php echo $k->nama_jenis_maintenage ?></option>
                    <?php endforeach; ?>
                </select>
          </div>

          <div class="form-group">
            <label for="nama_pengguna">Keterangan:</label> <br>
            <textarea name="keterangan" class="ckeditor" id="ckedtor" class="form-control" rows="8" cols="80"> <?php echo $data[0]->keterangan ?></textarea>
          </div>

          <div class="form-group">
            <label for="nama_pengguna">Nama Petugas:</label>
            <input type="hidden" value="<?php echo $id_user ?>" class="form-control" id="id_user" name="id_user" >
            <input type="text" value="<?php echo $nama_pengguna ?>" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
            <input type="hidden" value="<?php echo $data[0]->foto ?>" class="form-control" id="foto" name="foto" readonly>


          </div>

          <div class="container">

            <img width="300" height="400" src="<?php echo base_url('uploads/'); ?><?php echo $data[0]->foto ?>" alt="">
          </div>


          <div class="form-group">
            <label for="nama_pengguna">Foto:</label> <br>
          <input type="file" name="foto" class="form-control">
          </div>


          <div class="form-group">
            <label for="nama_pengguna">Biaya Perawatan:</label>

            <input type="number"   class="form-control" value="<?php echo $data[0]->cost ?>" id="cost" name="cost" required placeholder="Masukan Biaya Perawatan.">

          </div>


          <div class="form-group">

            <input type="submit" class="btn btn-primary form-control block"  name="submit">

              <input type="reset" class="btn btn-warning form-control block"  name="reset">

          </div>


</form>


<script type="text/javascript">


function pilihdesa() {



var id_desa = document.getElementById("id_kecamatan").value;

$.ajax({
                url : "<?php echo base_url();?>t_user/pilihdesa/"+id_desa,
                method : "POST",

                success: function(data){

                    $('#id_desa').html(data);

                }
            });



}

</script>
        </div>
      </div>
    </div>
  </div>
</main>
