<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Table extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        if (! ($this->session->level == 1 || $this->session->level == 2 )){
            redirect("auth");
        }
    }
    function index(){
        $query = $this->db->get('employee');
        $data['employee'] = $query->result_array();;
        $data['category'] = $this->db->get("categories");
        $this->form_validation->set_rules('division','Division', 'required');
        if ($this->form_validation->run() == FALSE ){
            $this->load->view("admin/admin_table",$data);
        } else {
            $id = $this->input->post("id",TRUE);
            $new_data   =   array(
                "NIK"                   =>  strtotime( date('Y-m-d H:i:s') ),
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
   
    function delete(){
        $id = $this->input->post("id");
        $this->db->where("id",$id);
        $this->db->delete("employee");
        $this->session->set_flashdata('message', "Delete Success");
        redirect('table');
    }
       
 }  

?>