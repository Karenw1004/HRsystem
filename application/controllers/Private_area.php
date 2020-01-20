<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Private_area extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')){
            redirect("auth");
        }
       
    }

    function index() {
        // if ($this->session->level == 1 ){
        //     $this->load->view("dashboard");
        // }
        $this->load->view("dashboard");

    }
       
    function manager(){
        if ($this->session->level == 2 ){
            $this->load->view("dashboard");
        }

    }

    function staff(){
        if ($this->session->level == 3 ){
            $this->load->view("dashboard");
        }

    }
    function logout(){
        $data = $this->session->all_userdata();
        foreach($data as $row => $row_value){
            $this->session->unset_userdata($row);

        }
        redirect("auth");
    }

    
 }  

?>