

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

<script src="<?php echo base_url(). 'assets/vendor/timepicker/bootstrap-timepicker.js'?>" type='text/javascript'></script>

<script>
$(document).ready(function(){
		$('#timepicker1,#timepicker2').timepicker({
      uiLibrary: 'bootstrap4',
      minuteStep: 1,
      template: 'dropdown',
      showMeridian:false
		});
		//-----------------------------------------------------------------
		$('#timepicker1,#timepicker2').change(function(){                 
			//get value from parent form 
			var from = $("#timepicker1").val(); 
			var to = $("#timepicker2").val();		


			// calculate number of minutes for first field
			var from_hour = from.substring(0, 2);
			var from_min = from.substring(3, 5);
			var from_total = ((parseInt(from_hour )* 60) + (parseInt(from_min) * 1));

			//calculate number of minutes for second field
			var to_hour = to.substring(0, 2);
			var to_min = to.substring(3, 5);
			var to_total = ((parseInt(to_hour) * 60) + (parseInt(to_min) * 1)) ;

			//final calculation (number of minutes)
			var duration_total = (to_total - from_total) ;


      diff = duration_total; // ms per day
        var hours = Math.floor(diff / 60);
        var minutes = diff % 60;
        var hour = (hours > 1) ? hours + " hrs " : hours + " hr ";
        var min = (minutes > 0) ? minutes + " mins" : "";
        var duration= hour + min;
			  if (diff == null) { return ""; }
        if (diff <= 0) { 
          duration = "";
        }
       
			//store the value to a field 
			$("#duration").val(duration); 															 
		});    
		
		//-----------------------------------------------------------------
    $('.form-group .form-validator').change(function() {

    var empty = false;
    $('.form-group .form-validator').each(function() {
        if ($(this).val().length == 0 ) {
            empty = true;
        }
    });

    if (empty) {
        $('#submitReport').attr('disabled', 'disabled');
    } else {
      $('#submitReport').attr('disabled', false);
    }
    });
      
      
  });
  
  



</script>
