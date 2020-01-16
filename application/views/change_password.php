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
           <form method="POST" action="<?php echo base_url(); ?>auth/change_password">  
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