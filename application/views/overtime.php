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

          <h1 class="h3 mb-2 text-gray-800 py-2">Overtime </h1>
          <button class="btn btn-success float-right " data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-user-plus"></i>  Report</button>
          
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
          <div class="container py-2">
            
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Duration</th>
                    <th>Total Duration</th>
                    <th>Position</th>
                    <th>Work Description</th>
                    <th>Work Result</th>
                    <th>Work Assigned by</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
          			
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