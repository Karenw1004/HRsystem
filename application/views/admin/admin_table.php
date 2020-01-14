<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SB Admin 2 - Tables</title>
  <link href="<?= base_url("assets/"); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url("assets/"); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.css'?>">
  



</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view("admin/_partials/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Employee Table</h1>
          <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModalAdd">Add New</button>
          <?php $this->load->view("admin/_partials/modal_add.php") ?>
          <div class="container py-3">
            
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
           
            </div>
                
              
          </div>

        <!-- End of container-fluid -->
        </div>

      <!-- End of Main Content -->
      </div>

    <!-- End of Content Wrapper -->
    </div>

    
  <!-- End of Page Wrapper -->
  </div>                    
 
 
  <?php $this->load->view("admin/_partials/footer.php") ?>


   

</body>

</html>