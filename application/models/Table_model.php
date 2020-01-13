<?php
class Table_model extends CI_Model
{
    function get_category(){
        return $this->db->get("categories");
    }
    function get_all_data() {
        // $this->datatables->select("*");
        // $this->datatables->from("employee");
        // $this->datatables->join("categories", "employeee_category_id=category_id");
        // $this->datatables->add_column("view", '<a href="javascript:void(0);" class="edit_record btn btn-info" data-code="$1" data-name="$2" data-price="$3" data-category="$4">Edit</a>  <a href="javascript:void(0);" class="delete_record btn btn-danger" data-code="$1">Delete</a>','NIK,email,first_name,last_name,division,position,phone_num,address,photo_path,join_date,employeee_category_id');
        $query = $this->db->get('employee');
        return $query->result_array();
    }

    function insert_product(){
        $data   =   array(
            "NIK"                   => $this->input->post("NIK"),
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
        return $this->db->insert("employee", $data);
    }
    function update_product(){
        $NIK=$this->input->post("NIK");
        $data   =   array(
            "NIK"                   => $this->input->post("NIK"),
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
        $this->db->where("NIK",$NIK);
        $result=$this->db->update("employee", $data);
        return $result;
    }
    function delete_product(){
        $NIK=$this->input->post("NIK");
        $this->db->where("employee",$NIK);
        $result=$this->db->delete("employee");
        return $result;
    }
       
}
?>