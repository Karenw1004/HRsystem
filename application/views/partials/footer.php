

<script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/sb-admin-2.min.js'?>"></script>

<script src="<?php echo base_url().'assets/vendor/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>
<!-- Script for DataTable -->
<script>

  $(function () {

    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "scrollX": false
    });

    
  });
  
  $(document).ready(function(){
   // get Hapus Records
   $('#dataTable').on('click','.hapus_record',function(){
    var id =  $(this).attr('data-id'); 
    // $('#ModalHapus').modal('show');
    $('[name="id"]').val(id);
  });

  });
</script>

<!-- Datepicker -->
<link href="<?php echo base_url().'assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'?>" rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(). 'assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'?>" type='text/javascript'></script>

<!-- Script for Datepicker-->
<script type="text/javascript">
$(document).ready(function(){
 $('#datepicker').datepicker({
    format: 'mm-dd-yyyy',
    endDate: '+0d',
    autoclose: true
  });
});
</script>
