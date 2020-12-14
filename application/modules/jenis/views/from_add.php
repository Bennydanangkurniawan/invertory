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


<form  action="<?php echo base_url('jenis/proses_tambah') ?>" method="POST">


          <div class="form-group">
            <label for="nama_pengguna">Nama Jenis:</label>
            <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" required>
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
