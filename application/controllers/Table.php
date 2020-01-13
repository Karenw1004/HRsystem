<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Table extends CI_Controller {  
    public function __construct() {
        parent::__construct();
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('table_model');
    }
    function index(){
        $data['employee'] = $this->table_model->get_all_data();
        // $data['empty'] = "this is EMPTY";
        // echo "<script>console.log('Debug Objects: " . $data . "' );</script>";
        $this->load->view("admin/admin_table", $data);
    }
    
    // function dumy_data(){
    //     $jumlah_data = 10;
    //     for ($i=1;$i<=$jumlah_data;$i++){
    //     $data   =   array(
    //         "NIK"                   => $i,
    //         "email"                 =>  "karyawan-$i@gmil.com",
    //         "first_name"            =>  "Karyawan Ke-".$i,
    //         "last_name"             =>  "Last Name Ke-".$i,
    //         "division"              =>  "SAME",
    //         "position"              =>  "IDK",
    //         "phone_num"             =>  '089699935552',
    //         "address"               =>  "Jln. Axa Tower",
    //         "photo_path"            =>  "foto-karyawan-$i.jpg",
    //         "join_date"             =>  "2019-01-09",
    //         "employee_category_id" =>  "3"
    //     );
    //         $this->db->insert('employee',$data); 
    //     }
    //     echo $i.' Data Berhasil Di Insert';
    //     echo json_encode($data);
    // }

    // function index(){
    //     $x['category']=$this->table_model->get_category();
    //     $this->load->view('admin/crud',$x);
    // }
   
    function save(){ //insert record method
        $this->table_model->insert_product();
        redirect('table');
    }
   
    function update(){ //update record method
        $this->table_model->update_product();
        redirect('table');
    }
   
    function delete(){
        $this->table_model->delete_product();
        redirect('table');
    }
       
 }  

?>