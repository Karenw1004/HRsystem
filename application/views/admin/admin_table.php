<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("partials/header.php") ?>

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view("partials/sidebar.php") ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view("partials/topbar.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <h1 class="h3 mb-2 text-gray-800">Employee Table</h1>
          <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-user-plus"></i>  Add New</button>
          <?php $this->load->view("admin/_partials/modal_add.php") ?>
          <?php $this->load->view("admin/_partials/modal_update.php") ?>
          <?php $this->load->view("admin/_partials/modal_delete.php") ?>
          <?php 
          if ($this->session->flashdata('message')){
               echo '<div class="alert alert-success">'.$this->session->flashdata("message").'</div>';
          }
          ?>

          <?php 
          if ($this->session->flashdata('error')){
               echo '<div class="alert alert-danger">'.$this->session->flashdata("error").'</div>';
          }
          ?>
          <div class="container py-3">
            
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>EMAIL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Division</th>
                    <th>Position</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Photo Path</th>
                    <th>Join date</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
          				<?php
          					$no=0;
          					foreach ($employee as $row) :
                      $no++;
                      $id = $row['id'];
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
                  <td><?php echo $email?></td>
                  <td><?php echo $first_name?></td>
                  <td><?php echo $last_name?></td>
                  <td><?php echo $division?></td>
                  <td><?php echo $position?></td>
                  <td><?php echo $phone_num?></td>
                  <td><?php echo $address?></td>
                  <td><?php echo $photo_path?></td>
                  <td><?php echo $join_date?></td>
                  <td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalUpdate<?php echo $id?>"><i class="fas fa-edit"></i>Update</button>
                  <button class="hapus_record btn btn-danger " data-toggle="modal" data-target="#ModalDelete" data-id="<?php echo $id?>"><i class="fas fa-trash"></i>Delete</button></td>
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
 
 
  <?php $this->load->view("partials/footer.php") ?>


   

</body>

</html>