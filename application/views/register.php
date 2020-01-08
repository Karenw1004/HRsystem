<!DOCTYPE html>  
 <html>  
 <head>  
     <title>HELO</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <h4>User Registration </h4>
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
          <form method="POST" action="<?php echo base_url(); ?>register/register_validation">  
               <div class="form-group">  
                    <label>Enter Username</label>  
                    <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
                    <span class="text-danger"><?php echo form_error('user_name'); ?></span>                 
               </div>  
               <div class="form-group">  
                    <label>Enter Password</label>  
                    <input type="password" name="user_password" class="form-control"value="<?php echo set_value('user_password'); ?>" /> 
                    <span class="text-danger"><?php echo form_error('user_password'); ?></span>  
               </div>  
               <div class="form-group">  
                    <label>Enter Valid Email Address </label>  
                    <input type="text" name="user_email" class="form-control"value="<?php echo set_value('user_email'); ?>" /> 
                    <span class="text-danger"><?php echo form_error('user_email'); ?></span>  
               </div>  
               <!-- <div class="form-group">  
                    <label>Enter your position </label>  
                    <select name="user_level" class="browser-default custom-select">
                         <option value="1">Admin</option>
                         <option value="2">Manager</option>
                         <option value="3">User</option>
                    </select>
               </div> -->

               <div class="form-group">  
                    <input type="submit" name="register" value="Register" class="btn btn-info" />  
                    <?php  
                         echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                    ?>  
                    <a href="<?php echo base_url(); ?>login" >Login</a>
               </div>  
          </form>  
      </div>  
 </body>  
 </html>  