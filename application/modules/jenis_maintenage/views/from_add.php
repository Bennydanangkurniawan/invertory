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


<form  action="<?php echo base_url('jenis_maintenage/proses_tambah') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama jenis_maintenage:</label>
            <input type="text" class="form-control" id="nama_jenis_maintenage" name="nama_jenis_maintenage" required>
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
