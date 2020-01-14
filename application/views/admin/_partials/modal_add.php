
<!-- Modal -->
<form id="add-row-form" action="<?php echo base_url('table/save');?>" method="post">
<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <input type="text" name="NIK" class="form-control" placeholder="Enter your NIK" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="Enter Your First Name " required>
        </div>
        <div class="form-group">
            <input type="text" name="last_name" class="form-control" placeholder="Enter Your Last Name" required>
        </div>
        <div class="form-group">
            <input type="text" name="division" class="form-control" placeholder="Enter Your Division" required>
        </div>
        <div class="form-group">
            <input type="text" name="position" class="form-control" placeholder="Enter Your Position" required>
        </div>
        <div class="form-group">
            <input type="text" name="phone_num" class="form-control" placeholder="Enter Your Phone Num" required>
        </div>
        <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Enter Your Address" required>
        </div>
        <div class="form-group">
            <input type="text" name="photo_path" class="form-control" placeholder="Enter Your Photo Path" required>
        </div>
        <div class="form-group">
            <input type="text" name="join_date" class="form-control" placeholder="Enter Your Join Date" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>