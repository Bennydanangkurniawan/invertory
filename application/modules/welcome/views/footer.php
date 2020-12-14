<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Create By &copy; Benny Danang Kurniawan <?php echo date('Y') ?></div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/dist/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/dist/assets/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/dist/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/dist/assets/demo/datatables-demo.js"></script>
</body>
</html>


<script type="text/javascript">



$(document).ready(function(){
      $('#id_kecamatan').change(function(){
          var id=$(this).val();

          console.log(id);
          $.ajax({
              url : "<?php echo base_url();?>t_user/pilihdesa/"+id,
              // method : "POST",
              // data : {id: id},
              // async : false,
              // dataType : 'json',
              success: function(data){
                  // var html = '';
                  // var i;
                  // for(i=0; i<data.length; i++){
                  //     html += '<option>'+data[i].subkategori_nama+'</option>';
                  // }
                  // $('.subkategori').html(html);
console.log(data);

              }
          });
      });
  });
</script>
