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


<form  action="<?php echo base_url('t_user/proses_tambah') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama Pengguna:</label>
            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" required>
          </div>


          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>

          <div class="alert alert-danger">
            <strong>Awas!</strong> Pastikan Anda Ingat Password tersebut
          </div>
          <div class="form-group">
            <label for="username">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <div class="form-group">
            <label for="sel1">Pilih Status:</label>
            <select class="form-control" id="status" name="status" >
              <option value="0">--Pilih User--</option>

                <option value="admin">ADMIN</option>
                <option value="user">USER</option>



            </select>
          </div>


          <!-- <div class="form-group">
            <label for="sel1">Pilih Desa:</label>
            <select class="form-control" id="id_desa" name="id_desa" class="subkategori form-control" >


    <option value="0">-Pilih Nama Desa-</option>

            </select>
          </div> -->





          <!-- <div class="alert alert-info">
            <strong>Info!</strong> Pilih TPS Sesuai dengan Blanko
          </div> -->
          <!-- <div class="form-group">
            <label for="username">Nomor TPS:</label>
            <input type="number" class="form-control"  name="no_tps" required>
          </div> -->

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
