<!-- Modal Report Product-->
<form id="report-row-form" action="<?php echo base_url('form')?>" method="post">
<div class="modal fade" id="myModalReport" tabindex="-1" role="dialog" aria-labelledby="myModalReport" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="container"> 
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Report Overtime work</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group row">
                        <label for="date" class="col-form-label">Date: </label>
                        <input type='text' name="date" class="form-control mx-2 form-validator" id='datepicker' style='width: 150px;' >
                        
                    </div>
                      

                    <div class="form-group row">
                        <label class="col-4" for="timepicker1">From:</label>
                        <label class="col-4" for="timepicker2">To:</label>
                        <label class="col-4" for="duration">Duration:</label>
                        <div class="row">

                            <div class="col-4 bootstrap-timepicker timepicker">
                                <input id="timepicker1" name="start-time" type="text" class="form-control input-small form-validator">
                            </div>

                            <div class="col-4 bootstrap-timepicker timepicker">
                                <input id="timepicker2" name="end-time" type="text" class="form-control input-small form-validator">
                            </div>

                            <div class="col-4">
                                <input id="duration" value="" name="duration" type="text" class="form-control input-small form-validator" disabled>
                            </div>

                        </div>
                    </div>


                    <div class="form-group">
                        <label for="description"> Work Description</label>
                        <textarea class="form-control form-validator" name="description" id="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="description"> Work Result</label>
                        <textarea class="form-control form-validator" name="result" id="result" rows="2"></textarea>
                    </div>

                    <div class="form-group">
                    <label>Work given by:</label>
                    <select class="form-control form-validator" name="given_by" id="given_by" required>
                        <?php foreach($manager as $row):?>
                            <option value="<?php echo $row['first_name'];?>">Manager <?php echo $row["first_name"];?></option>
                        <?php endforeach;?>
                    </select>
                  </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submitReport"disabled="disabled">Report</button>
                </div>
            </div>
           

        </div>
  </div>
</div>  
</form>