<?php  
 class Login_model extends CI_Model  
 {  
     function can_login($email, $password)  
     {  
          $this->db->where('email', $email);  
          $query = $this->db->get('codeigniter_register');  
          //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
          if($query->num_rows() > 0)  
          {  
          foreach($query->result() as $row){
               if ($row->is_email_verified == "yes"){
                    $decrpyted_password = $this->encryption->decrypt($row->password);
                    if ($password == $decrpyted_password){
                         $login_data = array(
                              'id' => $row->id,
                              'name'=> $row->name,
                              'email' => $row->email,
                              'level' => $row->level              
                         );
                         // $this->session->set_userdata('id', $row->id );
                         $this->session->set_userdata($login_data);
                    }
                    else {
                         return "Wrong Password";
                    }
               }
               else{
                    return "First verify ur email";
               }
          }
               return true;  
          }  
          else  
          {  
               return false;       
          }  
      }  
 }