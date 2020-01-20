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
        if ($this->form_validation->run() == FALSE ){
            $this->load->view("overtime",$data);
        }
        else{
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
        }
    }
}
?>

