<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>My Project</title>
  <link href="<?= base_url("assets/"); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url("assets/"); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url().'assets/vendor/datatables/dataTables.bootstrap4.min.css'?>">

</head> 
<body class="bg-gradient-primary"> 
     <div class="container">  
          <br /><br /><br />  
          <?php 
          if ($this->session->flashdata('message')){
               echo '<div class="alert alert-success py-2">'.$this->session->flashdata("message").'</div>';
          }
          ?>

          <?php 
          if ($this->session->flashdata('error')){
               echo '<div class="alert alert-danger py-2">'.$this->session->flashdata("error").'</div>';
          }
          ?>
          <!-- Outer Row -->
          <div class="row justify-content-center">

               <div class="col-lg-7">

               <div class="card o-hidden border-0 shadow-lg my-5">
               <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    <div class="col-lg">
                         <div class="p-5">

                              <div class="text-center">
                                   <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                              </div>

                              <form class="user" method="POST" action="<?php echo base_url(); ?>auth/login_validation">  

                                   <div class="form-group">  
                                        <input type="email" name="user_email" value="<?php echo set_value('user_email'); ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." /> 
                                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>  
                                   </div>

                                   <div class="form-group">  
                                        <input type="password" name="user_password" value="<?php echo set_value('user_password'); ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password"/> 
                                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>  
                                   </div>  

                                   <div class="form-group">  
                                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-user btn-block" />  
                                   <div>
    
                              </form>  

                              <hr>
                                   
                              <div class="text-center">
                                   <a class="small" href="<?php echo base_url(); ?>auth/forget_password">Forgot Password?</a>
                              </div>
                              
                              <div class="text-center">
                                   <a class="small" href="<?php echo base_url(); ?>auth/register">Create an Account</a>
                              </div>

                         </div> 
                    </div>
                    </div>

               </div>
               </div>

               </div>
          </div>
    </div>
</body>  
</html>  