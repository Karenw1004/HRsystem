<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Form extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    function index(){
        $data['employee'] = $this->db->get('employee')->result_array();
        $data['category'] = $this->db->get("categories")->result_array();
        // $category_id = $this->input->post('id',TRUE);
        $data['manager'] = $this->db->get_where('employee', array('employee_category_id' => "2"))->result_array();
        $this->form_validation->set_rules('description','Work Description', 'required');

        if ($this->form_validation->run() == FALSE ){
            $this->load->view("overtime",$data);
        }
        else{
            $id = $this->input->post("id",TRUE);
            $new_data   =   array(
                "name"                =>  "NAME",
                "date"                =>  $this->input->post("date"),
                "duration"            =>  $this->input->post("duration"),
                "description"         =>  $this->input->post("description"),
                "result"              =>  $this->input->post("result"),
                "given_by"            =>  $this->input->post("given_by"),
                "status"              =>  "PENDING"
            );

            if ($id == ""){ //id empty,insert
                $result = $this->db->insert("overtime", $new_data);
                $this->session->set_flashdata('message', "Insert Success");
                // redirect("form");
            } else { //update
                $this->db->where("id",$id);
                $result=$this->db->update("overtime", $new_data);
                $this->session->set_flashdata('message', "Update Success");
                // redirect("form");

            }
        }
    }
}
?>

