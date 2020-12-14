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


<form  action="<?php echo base_url('kategory/proses_tambah') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama kategory:</label>
            <input type="text" class="form-control" id="nama_kategory" name="nama_kategory" required>
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
