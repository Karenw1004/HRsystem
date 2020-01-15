<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Table extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('table_model');
    }
    function index(){
        $data['employee'] = $this->table_model->get_all_data();
        $data['category'] = $this->table_model->get_category();
        $this->form_validation->set_rules('division','Division', 'required');
        if ($this->form_validation->run() == FALSE ){
            $this->load->view("admin/admin_table",$data);
        } else {
            $id = $this->input->post("id",TRUE);
            $new_data   =   array(
                "email"                 =>  $this->input->post("email"),
                "first_name"            =>  $this->input->post("first_name"),
                "last_name"             =>  $this->input->post("last_name"),
                "division"              =>  $this->input->post("division"),
                "position"              =>  $this->input->post("position"),
                "phone_num"             =>  $this->input->post("phone_num"),
                "address"               =>  $this->input->post("address"),
                "photo_path"            =>  $this->input->post("photo_path"),
                "join_date"             =>  $this->input->post("join_date"),
                "employee_category_id" =>  "3"
            );

            if ($id == ""){ //id empty,insert
                $result = $this->db->insert("employee", $new_data);
                $this->session->set_flashdata('message', "Insert Success");
                redirect("table");
            } else { //update
                $this->db->where("id",$id);
                $result=$this->db->update("employee", $new_data);
                $this->session->set_flashdata('message', "Update Success");
                redirect("table");

            }
        }
        
    }
   
    // function save(){ //insert record method
    //     $this->table_model->insert_product();
    //     redirect('table');
    // }
   
    // function update(){ //update record method
    //     $this->table_model->update_product();
    //     redirect('table');
    // }
   
    // function delete(){
    //     $this->table_model->delete_product();
    //     redirect('table');
    // }
       
 }  

?>