<!DOCTYPE html>  
 <html>  
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
                              <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                              <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                         </div>

                         <form class="user" method="POST" action="<?php echo base_url(); ?>auth/forget_password">  
                              <div class="form-group">  
                                   <input type="text" name="user_email" value="<?php echo set_value('user_email'); ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." /> 
                                   <span class="text-danger"><?php echo form_error('user_email'); ?></span>  
                              </div>
                              <div class="form-group">  
                                   <input type="submit" name="reset" value="Reset Password" class="btn btn-primary btn-user btn-block" />  
                                   <?php  
                                   echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                                   ?> 
                              </div>  
                         </form>
                         
                         <div class="text-center">
                              <a class="small" href="<?php echo base_url(); ?>auth/register">Create an Account</a>
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
</body>  
</html>  