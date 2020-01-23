<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Form extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    function index(){
        if ($this->session->level == "3"){
            $data['heading'] = "Overtime";
            $data['overtime'] = $this->db->get_where('overtime', array('name' => $this->session->name))->result_array();
        } else {
            $data['heading'] = "Approval";
            $data['overtime'] = $this->db->get_where('overtime', array('status' => "PENDING" ))->result_array();
        }
        $data['employee'] = $this->db->get('employee')->result_array();
        $data['category'] = $this->db->get("categories")->result_array();
        $category_id = $this->input->post('id',TRUE);
        $data['manager'] = $this->db->get_where('employee', array('employee_category_id' => "2"))->result_array();
        

        $this->form_validation->set_rules('description','Work Description', 'required');

        if ($this->form_validation->run() == FALSE ){
            $this->load->view("form/overtime",$data);
        }
        else{
            if ($this->session->level == "3"){
                
                $id = $this->input->post("id",TRUE);
                $new_data   =   array(
                    "name"                =>  $this->session->name,
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
                    redirect("form");
                } else { //update  
                
                }
            } else {
                

            }
            
        }
    }

    function approval(){
        $id = $this->input->post("id");
        $status = $this->input->post("status");
        echo $id;
        $update_data   =   array(
            "id"                =>  $id,
            "status"            =>  $status
        );
        $this->db->where("id",$id);
        $result=$this->db->update("overtime", $update_data);
        // redirect is at the footer ajax script
    }

    function date(){
        $is_date_search = $this->input->post("is_date_search");
        $start_date = $this->input->post("start_date");
        $end_date = $this->input->post("end_date");
        
        if ($is_date_search == "yes"){

            $query = "SELECT * FROM overtime WHERE date BETWEEN $start_date AND $end_date";
            $data['overtime'] = $this->db->query($query)->result_array();
            $this->session->set_flashdata('message', $data['overtime']['name']);


        
        }
                

    
    }

}
?>

