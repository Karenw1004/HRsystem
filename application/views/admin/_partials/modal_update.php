<?php
    foreach ($employee as $row) :
        $id = $row['id'];
        $NIK = $row['NIK'];
        $email = $row['email'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $division = $row['division'];
        $position = $row['position'];
        $phone_num = $row['phone_num'];
        $address = $row['address'];
        $photo_path = $row['photo_path'];
        $join_date = $row['join_date'];
        $employee_category_id = $row['employee_category_id'];                              
?>
<!-- Modal Update Product-->
<form class="update-row-form" action="<?php echo base_url('table');?>" method="post">
    <div class="modal fade" id="myModalUpdate<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update new employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id?>" >
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Update your email" value="<?php echo $email?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="Update Your First Name " value="<?php echo $first_name?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="Update Your Last Name" value="<?php echo $last_name?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="division" class="form-control" placeholder="Update Your Division" value="<?php echo $division?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="position" class="form-control" placeholder="Update Your Position" value="<?php echo $position?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_num" class="form-control" placeholder="Update Your Phone Num" value="<?php echo $phone_num?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Update Your Address" value="<?php echo $address?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="photo_path" class="form-control" placeholder="Update Your Photo Path" value="<?php echo $photo_path?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="join_date" class="form-control" placeholder="Update Your Join Date" value="<?php echo $join_date?>" required>
                    </div>

                </div>
                
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
                
            </div>
        </div>
    </div>
</form>
<?php endforeach;?>











