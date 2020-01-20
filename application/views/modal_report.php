<!-- Modal Report Product-->
<form id="report-row-form" action="<?php echo base_url('form')?>" method="post">
<div class="modal fade" id="myModalReport" tabindex="-1" role="dialog" aria-labelledby="myModalReport" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Report Overtime work</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-group row">
                    <label for="date">Date: </label>
                    <input type='text' name="date" class="mx-1" id='datepicker' style='width: 150px;' >
                    <label for="duration">Duration:</label>

                </div>
                
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Report</button>
            </div>

        </div>
  </div>
</div>  
</form>