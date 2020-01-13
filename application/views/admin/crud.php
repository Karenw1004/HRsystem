<html lang="en">
<head>
    <meta charset="utf-8">
    <title>table ignited datatables in CodeIgniter</title>
   <!-- Custom fonts for this template -->
   <link href="<?= base_url("assets/"); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?= base_url("assets/"); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="<?= base_url("assets/"); ?>vendor/datatables/dataTables.bootstrap.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <h2>List</h2>
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModalAdd">Add New</button>
    <table class="table table-striped" id="mytable">
      <thead>
            <tr>
                <th>NIK</th><th>EMAIL</th><th>First Name</th><th>Last Name</th><th>Division</th>
                <th>Position</th><th>Phone Number</th><th>Address</th><th>Photo Path</th><th>Join date</th>
            </tr>
      </thead>
    </table>
  </div>
 
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
 
     <!-- Modal Update Product-->
    <form id="update-row-form" action="<?php echo base_url('table/update');?>" method="post">
        <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Product</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="product_code" class="form-control" placeholder="Product Code" readonly>
                    </div>
                                        <div class="form-group">
                        <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                    </div>
                                        <div class="form-group">
                        <select name="category" class="form-control" required>
                                                    <?php foreach ($category->result() as $row) :?>
                                                        <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                                    <?php endforeach;?>
                                                </select>
                    </div>
                                        <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Price" required>
                    </div>

                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                </div>
                    </div>
            </div>
        </div>
    </form>
 
     <!-- Modal delete Product-->
    <form id="delete-row-form" action="<?php echo base_url('table/delete');?>" method="post">
        <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                </div>
                <div class="modal-body">
                        <input type="hidden" name="product_code" class="form-control" required>
                                                <strong>Are you sure to delete this record?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-success">Yes</button>
                </div>
                </div>
        </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        // Setup datatables
    //     $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
    //   {
    //       return {
    //           "iStart": oSettings._iDisplayStart,
    //           "iEnd": oSettings.fnDisplayEnd(),
    //           "iLength": oSettings._iDisplayLength,
    //           "iTotal": oSettings.fnRecordsTotal(),
    //           "iFilteredTotal": oSettings.fnRecordsDisplay(),
    //           "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
    //           "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
    //       };
    //   };
 
      var table = $("#mytable").dataTable({
        // "initComplete": function() {
        //     var api = this.api();
        //     $('#mytable_filter input')
        //         .off('.DT')
        //         .on('input.DT', function() {
        //             api.search(this.value).draw();
        //     });
        //  },
        //     oLanguage: {
        //     sProcessing: "loading..."
        // },
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo base_url();?>table/json",
            "type": "POST",
            "dataSrc": ""
        },
        "columns": [
            {"data":"NIK"           ,width:100},
            {"data":"email"         ,width:100},
            {"data":"first_name"    ,width:100},
            {"data":"last_name"     ,width:100},
            {"data":"division"      ,width:100},
            {"data":"position"      ,width:100},
            {"data":"phone_num"     ,width:100},
            {"data":"address"       ,width:100},
            {"data":"photo_path"    ,width:100},
            {"data":"join_date"     ,width:100},
            {"data":"employee_category_id", width:100}
            ],
        // order: [[1, 'asc']],
        "order": [],
        "rowCallback": function(row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
            $('td:eq(0)', row).html();
        }
    });
            // end setup datatables
            // get Edit Records
    //         $('#mytable').on('click','.edit_record',function(){
    //         var code=$(this).data('code');
    //                     var name=$(this).data('name');
    //                     var price=$(this).data('price');
    //                     var category=$(this).data('category');
    //         $('#ModalUpdate').modal('show');
    //         $('[name="product_code"]').val(code);
    //                     $('[name="product_name"]').val(name);
    //                     $('[name="price"]').val(price);
    //                     $('[name="category"]').val(category);
    //   });
    //         // End Edit Records
    //         // get delete Records
    //         $('#mytable').on('click','.delete_record',function(){
    //         var code=$(this).data('code');
    //         $('#ModalDelete').modal('show');
    //         $('[name="product_code"]').val(code);
    //   });
            // End delete Records
    });
</script>
<?php $this->load->view("admin/_partials/footer.php") ?>


</body>
</html>