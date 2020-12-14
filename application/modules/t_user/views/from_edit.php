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


<form  action="<?php echo base_url('t_user/proses_edit') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama Pengguna:</label>
            <input type="text" class="form-control" id="nama_pengguna" value="<?php echo $datas[0]->nama_pengguna ?>" name="nama_pengguna" required>
            <input type="hidden" class="form-control" id="id" value="<?php echo $datas[0]->id_user ?>" name="id" required>

          </div>


          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" value="<?php echo $datas[0]->username ?>" id="username" name="username" required>
          </div>

          <div class="alert alert-primary">
            <strong>Penting !!!</strong> Masukan Ulang Password Anda
          </div>
          <div class="form-group">
            <label for="username">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="form-group">
            <label for="sel1">Pilih Status:</label>
            <select class="form-control" id="status" name="status" >
              <option value="<?php echo $datas[0]->status ?>">-- <?php echo $datas[0]->status ?>--</option>

                <option value="admin">ADMIN</option>
                <option value="user">USER</option>



            </select>
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
