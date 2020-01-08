<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Private_area extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('id')){
            redirect("login");
        }
       
    }

    function index() {
        if ($this->session->level == 1 ){
            echo "<h1>Admin Page</h1>";
            echo "WElcome " ;
            echo $this->session->userdata('name');
        //    echo $this->session->userdata('email');
            echo "Level is " ;
            echo $this->session->userdata('level') ;
            echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a><p>';
        }

    }
       

    function logout(){
        $data = $this->session->all_userdata();
        foreach($data as $row => $row_value){
            $this->session->unset_userdata($row);

        }
        redirect("login");
    }

    function manager(){
        if ($this->session->level == 2 ){
            echo "<h1>Manager Page</h1>";
            echo "WElcome " ;
            echo $this->session->userdata('name');
        //    echo $this->session->userdata('email');
            echo "Level is " ;
            echo $this->session->userdata('level') ;
            echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a><p>';
        }

    }

    function staff(){
        if ($this->session->level == 3 ){
            echo "<h1>Staff Page</h1>";
            echo "WElcome " ;
            echo $this->session->userdata('name');
        //    echo $this->session->userdata('email');
            echo "Level is " ;
            echo $this->session->userdata('level') ;
            echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a><p>';
        }

    }
 }  

?>