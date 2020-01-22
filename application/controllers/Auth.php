<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
  class Auth extends CI_Controller {  
    
  public function __construct() {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('encryption');
    $this->load->model('login_model');
    $this->load->model('register_model');
  }

  function index() {
      $this->load->view('login');
  }

  function login_validation() {

    $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
    $this->form_validation->set_rules('user_password', 'Password', 'required');
    if($this->form_validation->run())
    {
    $result = $this->login_model->can_login($this->input->post("user_email"), $this->input->post("user_password"));

    if ($result == " "){

      if ($this->session->level == '1'){
        redirect("private_area");
      } else if ($this->session->level == '2'){
        redirect("private_area/manager");
      } else { 
        redirect("private_area/staff");
      }

    }
    else{
      //error message
      $this->session->set_flashdata('error', $result);
      redirect("auth");
    }
    }
    else
    {
    $this->index();
    }
  }

  function forget_password(){
    $this->form_validation->set_rules('user_email','Address','trim|required|valid_email');
    if ($this->form_validation->run()){
      $email = $this->input->post('user_email');
      $user = $this->db->get_where('codeigniter_register',['email' => $email, 'is_email_verified' => "yes"])->row_array();
      if ($user) {
        $verification_key = $user['verification_key'];
        $data = array(
         'email'  => $this->input->post('user_email'),
         'verification_key' => $verification_key,
        );
        $this->send_email($verification_key,"forget");
        $this->session->set_flashdata("message","Please check your email to reset your password!");

        redirect("auth/forget_password");

      } else{
        $this->session->set_flashdata("error","Email is not registered or is not verified");
        redirect("auth");
      }
    
    } else {
      $this->load->view("forget_password");
    }
    
  }

  function reset_password() {
    $verification_key = $this->input->get('verification_key');
    $email = $this->input->get('email');

    $user = $this->db->get_where('codeigniter_register', ['email' => $email])->row_array();
    
    if ($user){
      $user_key = $this->db->get_where('codeigniter_register', ['email' => $email])->row_array();

      if ($user_key) {
        $this->session->set_userdata("reset_email",$email);
        $this->change_password();
      }
      else {
        $this->session->set_flashdata("error", "Wrong verification key");
        redirect("auth");
      }
    } else {
      $this->session->set_flashdata("error", "Reset Password failed");
      redirect("auth");
    }
  }

  function change_password(){

    if (!$this->session->userdata("reset_email")){
      redirect("auth");
    }

    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[7]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[7]|matches[password1]');
    
    if ( $this->form_validation->run() ){
      $encrypted_password = $this->encryption->encrypt($this->input->post('password1'));
      $email = $this->session->userdata('reset_email');

      $this->db->set('password',$encrypted_password);
      $this->db->where("email",$email);
      $this->db->update('codeigniter_register');

      $this->session->unset_userdata("reset_email");

      $this->session->set_flashdata("message","Password has been changed.");
      redirect("auth");

    } else {
      $this->load->view("change_password");
    }

    
  }

  function register() {
    $this->load->view("register");
  }
  function register_validation()
  {
   $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
   $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[codeigniter_register.email]',
   ["is_unique" => "This email has already registered!"]);
   $this->form_validation->set_rules('user_password', 'Password', 'required');
  //  $this->form_validation->set_rules('user_level', 'Password', 'required');

   if($this->form_validation->run())
   {
    $verification_key = md5(rand());
    $encrypted_password = $this->encryption->encrypt($this->input->post('user_password'));
    $data = array(
     'name'  => $this->input->post('user_name'),
     'email'  => $this->input->post('user_email'),
     'password' => $encrypted_password,
     'verification_key' => $verification_key,
  //    'level' => $this->input->post('user_level')
      'level' => '3'

    );

    $id = $this->register_model->insert($data);
    if($id > 0)
    {
     if ($this->send_email($verification_key,"verify") ){
         redirect("login");
     } else {
      $this->session->set_flashdata('message', 'An Error has occurred ');
          redirect("login");
     }
    }
   }
   else
   {
    $this->index();
   }
  }

  function verify_email()
  {
      if($this->uri->segment(3))
      {
      $verification_key = $this->uri->segment(3);
      if($this->register_model->verify_email($verification_key))
      {
          $data['message'] = '<h1 align="center">Your Email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';
      }
      else
      {
          $data['message'] = '<h1 align="center">Invalid Link</h1>';
      }
      $this->load->view('email_verification', $data);
      }
  }

  function send_email($key,$type){
      if ($type == "verify"){
          $subject = "Please verify email for login";
          $message = "
          <p>Hi ".$this->input->post('user_name')."</p>
          <p>This is email verification mail from XXXXXXXXXXXXXXX. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."auth/verify_email/".$key."'>link</a>.</p>
          <p>Once you click this link your email will be verified and you can login into system.</p>
          <p>Thanks,</p>
          ";
      } else if ($type == "forget"){
          $subject = "Forget your password for XXXXXXXXXXXXXXX";
          $message = "
          <p>Hi ".$this->input->post('user_name')."</p>
          <p>This is forget password mail from XXXXXXXXXXXXXXX. 
          To reset your password click this <a href='".base_url()."auth/reset_password?email=" .$this->input->post("user_email").
          "&verification_key=" .$key."'>link</a>.</p>
          <p>Once you click this link your email will be verified and you can login into system.</p>
          <p>Thanks,</p>
          ";
      }
      
      $config = array(
          'protocol'  => 'smtp',
          'smtp_host' => 'smtp.gmail.com',
          'smtp_port' => 465,
          'smtp_user'  => 'no.reply.for.my.project@gmail.com', 
          'smtp_pass'  => 'Test12345!', 
          'mailtype'  => 'html',
          'smtp_crypto' => 'ssl',
          'smtp_timeout' => '4',
          'charset'    => 'iso-8859-1',
          'wordwrap'   => TRUE
      );
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('no.reply.for.my.project@gmail.com');
      $this->email->to($this->input->post('user_email'));
      $this->email->subject($subject);
      $this->email->message($message);
      if($this->email->send())
      { 
        $this->session->set_flashdata('message', 'Check your email ');
        return true;
      }
      else {
          show_error($this->email->print_debugger());
      }
  }

}
   
?>

