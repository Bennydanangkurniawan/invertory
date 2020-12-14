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


<form  action="<?php echo base_url('jenis/proses_edit') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama Jenis:</label>
            <input type="text" class="form-control" id="nama_jenis" value="<?php echo $datas[0]->nama_jenis ?>" name="nama_jenis" required>
            <input type="hidden" class="form-control" id="id" value="<?php echo $datas[0]->id_jenis ?>" name="id" required>

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
