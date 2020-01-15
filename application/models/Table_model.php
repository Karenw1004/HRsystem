<?php
class Table_model extends CI_Model
{
    function get_category(){
        return $this->db->get("categories");
    }
    function get_all_data() {
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
        $id=$this->input->post("id");
        $this->db->where("id",$id);
        $result=$this->db->delete("employee");
        return $result;
    }
       
}
?>