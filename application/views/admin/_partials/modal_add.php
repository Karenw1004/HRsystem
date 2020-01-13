<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo base_url('table/save');?>" method="post">
        <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="NIK" class="form-control" placeholder="NIK" required>
                    </div>
                        <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control" placeholder="first_name " required>
                    </div>
                        <div class="form-group">
                        <input type="text" name="last_name" class="form-control" placeholder="last_name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="division" class="form-control" placeholder="division" required>
                    </div>
                        <div class="form-group">
                        <input type="text" name="position" class="form-control" placeholder="position" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone_num" class="form-control" placeholder="phone_num" required>
                    </div>
                        <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="address" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="photo_path" class="form-control" placeholder="photo_path" required>
                    </div>
                        <div class="form-group">
                        <input type="text" name="join_date" class="form-control" placeholder="join_date" required>
                    </div>
                        <div class="form-group">
                            <select name="category" class="form-control" placeholder="Category" required>
                                <?php foreach ($category->result() as $row) :?>
                                    <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                <?php endforeach;?>
                            </select>
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save</button>
                </div>
                </div>
            </div>
        </div>
    </form>