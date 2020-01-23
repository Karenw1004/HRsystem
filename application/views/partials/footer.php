

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
    format: 'yyyy-mm-dd',
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
      var duration = hour + min;
      if (diff == null || diff <= 0 ) { duration = "";}
       
			//store the value to a field 
      // $("#duration").val(duration); 
      $("#duration").attr("value",duration); 															 
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

<script>
$(document).ready(function(){
  $(".accept, .decline").click(function () {
    let overtime_id = $(this).attr('data-id');
    let status = $(this).val();
    let BASE_URL = $("#report-row-form").attr("action");
    $.ajax({
      url:  BASE_URL + "/approval",
      type: "POST",
      data: { 
        id: overtime_id ,
        status: status
      },
      success: function( response ) {
        window.location = BASE_URL;
      },
      error: function(xhr, status, error) {
      console.log(error);
   },
    });

  });

});
</script>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
  $('#start_date,#end_date').datepicker({
    todayBtn:'linked',
    format: "yyyy-mm-dd",
    autoclose: true
  });

  fetch_data('no');

  function fetch_data(is_date_search, start_date='', end_date='')
  {
    let BASE_URL = $("#report-row-form").attr("action");
    if (is_date_search == "yes"){
      $.ajax({
      url:  BASE_URL + "/date",
      type: "POST",
      data:{
        is_date_search:is_date_search, start_date:start_date, end_date:end_date
      },
      success: function( response ) {
        console.log(is_date_search);
        console.log(start_date);
        console.log(end_date);


        console.log("success") ;
        window.location = BASE_URL;
      },
      error: function(xhr, status, error) {
        console.log(error);
      },
    });
    }
    
  
 }

    $('#apply').click(function(){
      var start_date = $('#start_date').val();
      var end_date = $('#end_date').val();
      if(start_date != '' && end_date !='')
      {
        $('#datatable').DataTable().destroy();
        fetch_data('yes', start_date, end_date);
      }
      else
      {
        alert("Both Date is Required");
      }
  }); 
 
});
</script>