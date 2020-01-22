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

          <h1 class="h3 mb-2 text-gray-800 py-2"> <?php echo $heading ?> </h1>
          <?php if($this->session->level == "3") {  ?>
          <button class="btn btn-success pull-right " data-toggle="modal" data-target="#myModalReport"><i class="fas fa-user-plus"></i>  Report</button>
          <?php } ?>
          <?php $this->load->view("form/modal_report.php") ?>

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
            <?php if ($this->session->level == "3" ) { echo "<h3>" .$this->session->name. "</h3>"; } ?>
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                  <th>No</th>
                  <?php if($this->session->level != "3") { echo '<th>Name</th>' ;}  ?>
                  <th>Date</th>
                  <th>Duration</th>
                  <th>Work Description</th>
                  <th>Work Result</th>
                  <th>Work Assigned by</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach ($overtime as $row) :
                    $no++;
                    $id = $row['id'];
                    $name = $row['name'];
                    $date = $row['date'];
                    $duration = $row['duration'];
                    $description = $row['description'];
                    $result = $row['result'];
                    $given_by = $row['given_by'];
                    $status = $row['status'];
                  ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <?php if($this->session->level != "3") { echo '<td>' .$name. '</td>' ;} ?>
                  <td><?php echo $date?></td>
                  <td><?php echo $duration?></td>
                  <td><?php echo $description?></td>
                  <td><?php echo $result?></td>
                  <td><?php echo $given_by?></td>
                  <td>
                    <?php if($this->session->level == "3") { echo $status ;} 
                      else { 
                        echo "<button  type='submit' class='btn btn-primary accept' data-id=' " .$id. "'><i class='fas fa-check'></i></button> "; 
                        echo "<button  type='submit' class='btn btn-danger decline'><i class='fas fa-times'></i></button> ";
                      }
                  ?></td>
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