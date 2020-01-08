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
           <h4>Change Password </h4>
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
           <form method="POST" action="<?php echo base_url(); ?>login/change_password">  
            <div class="form-group">  
                <p><?= $this->session->userdata("reset_email")?></p>
            </div>
            <div class="form-group">  
                <label>Enter new password</label>  
                <input type="password" name="password1" class="form-control"value="<?php echo set_value('password1'); ?>" /> 
                <span class="text-danger"><?php echo form_error('password1'); ?></span>  
            </div>
            <div class="form-group">  
                <label>Repeat password</label>  
                <input type="password" name="password2" class="form-control"value="<?php echo set_value('password2'); ?>" /> 
                <span class="text-danger"><?php echo form_error('password2'); ?></span>  
            </div>
            <div class="form-group">  
                <input type="submit" name="change" value="Change Password" class="btn btn-info" />  
                <?php  
                echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                ?> 
                <a href="<?php echo base_url(); ?>login" >Login</a>
            </div>  
           </form>  
      </div>  
 </body>  
 </html>  