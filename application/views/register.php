<!DOCTYPE html>
<html lang="en">
<head>
     <?php $this->load->view("partials/header.php") ?>
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
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                              </div>

                              <form class="user" method="POST" action="<?php echo base_url(); ?>auth/register_validation">

                                   <div class="form-group">  
                                        <input type="text" name="user_name" class="form-control form-control-user" id="exampleFirstName" placeholder="Enter Username" value="<?php echo set_value('user_name'); ?>" />
                                        <span class="text-danger"><?php echo form_error('user_name'); ?></span>                 
                                   </div>  

                                   <div class="form-group">  
                                        <input type="password" name="user_password"  class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password" value="<?php echo set_value('user_password'); ?>" /> 
                                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>  
                                   </div> 

                                   <div class="form-group">  
                                        <input type="email" name="user_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Email Address" value="<?php echo set_value('user_email'); ?>" > 
                                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>  
                                   </div>  

                                   <div class="form-group">  
                                        <input type="submit" name="register" value="Register Account" class="btn btn-primary btn-user btn-block" />  
                                   <div>
                                        
                              </form>  

                              <hr>

                              <div class="text-center">
                                   <a class="small" href="<?php echo base_url(); ?>auth/forget_password">Forgot Password?</a>
                              </div>
                              
                              <div class="text-center">
                                   <a class="small" href="<?php echo base_url(); ?>auth" >Already have an account? Login!</a>
                              </div>

                              
                         </div>

                    </div>
                    </div>

               </div>
               </div>

               </div>

          </div>  
     </div>

     <?php $this->load->view("partials/footer.php") ?>
 </body>  
 </html>  