
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">

<table id="table" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>NIK</th>
                    <th>EMAIL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Division</th>
                    <th>Position</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Photo Path</th>
                    <th>Join date</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($employee as $row) :
          					   $no++;
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
                <tr>
                  <td><?php echo $NIK?></td>
                  <td><?php echo $email?></td>
                  <td><?php echo $first_name?></td>
                  <td><?php echo $last_name?></td>
                  <td><?php echo $division?></td>
                  <td><?php echo $position?></td>
                  <td><?php echo $phone_num?></td>
                  <td><?php echo $address?></td>
                  <td><?php echo $photo_path?></td>
                  <td><?php echo $join_date?></td>
                </tr>
				        <?php endforeach;?>
                </tbody>
              </table>
	


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<script>
  $(function () {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
    
   
</body>
</html>

          