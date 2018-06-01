<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");
        $this->load->helper("userfunc");
        $this->load->helper('language');
        $this->lang->load('messages_translation', 'english');
        $this->load->Model('admin/Users_Model','uM', true);
        $this->load->Model('Devices_Model','dM', true);
        
        $this->load->model("admin/Category_Model", "cM", true);
        $this->load->model("admin/Requirements_Model", "rM", true);
    }

    public function index()
    {
        __Islogin();
    }
    
    public function customers(){
        __Islogin();
        $data['customers'] = $this->uM->get_total_customers();
        $data['selected'] = 'management';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/customers',$data);
        $this->load->view('admin/footer');
    }

    public function customeredit($customer_id){
        __Islogin();
        $data['customer'] = $this->uM->get_customer_by_id($customer_id);
        $data['selected'] = 'management';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/handlecustomers' , $data);
        $this->load->view('admin/footer');
    }

    public function customeradd(){
        __Islogin();
        $data['selected'] = 'management';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/handlecustomers');
        $this->load->view('admin/footer');
    }
    
    public function devices(){
        __Islogin();
        $data['devices'] = $this->dM->get_total_devices();
        $this->load->view('admin/header');
        $this->load->view('admin/devices', $data);
        $this->load->view('admin/footer');
    }

    public function categories(){
        __Islogin();
        $data['categories'] = $this->cM->get_total_cates();
        $data['selected'] = 'management';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/category',$data);
        $this->load->view('admin/footer');
    }

    public function categoryadd(){
        $title = $this->input->post("title");
        if($this->cM->check_category_byname($title) == 0){
            $data = array(
                "title" => $this->input->post("title"),
                "author" => $this->session->userdata("user_id"),
                "created_on" => date('Y-m-d h:i:s', time())
            );
            echo json_encode(array("result" =>1,"data"=>$this->cM->get_category_by_id($this->cM->add_category($data))));
        }
        else{
            echo json_encode(array("result"=>2));
        }
    }

    
    public function categoryedit(){
        $id = $this->input->post("id");
        $title = $this->input->post("title");
        echo json_encode(array("result" =>$this->cM->edit_category($id,$title)));
    }

    public function categorydelete(){
        $id = $this->input->post("id");
        echo json_encode(array("result"=>$this->cM->delete_category_byid($id)));
    }

    public function add_customer(){
        $post = $this->input->post();
        $data = array(
            "name" => $post['name'],
            "email" => $post['email'],
            "password" => $post['password'],
            "phone" => $post['phone'],
            "role" => $post['role']
        );
        $new_id = $this->uM->add_new_customer($data);
        
        redirect(base_url().'admin/management/customers');
    }

    public function edit_customer($id){
        $post = $this->input->post();
        $data = array(
            "name" => $post['name'],
            "email" => $post['email'],
            "password" => $post['password'],
            "phone" => $post['phone'],
            "role" => $post['role']
        );
        $this->uM->edit_customer($data,$id);
        redirect(base_url().'admin/management/customers');
    }

    public function userdelete($id){
        $this->uM->delete_customer($id);
        redirect(base_url().'admin/management/customers');
    }

    public function requirements(){
        __Islogin();
        $data['requirements'] = $this->rM->get_total_requirements();
        $data['selected'] = 'management';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/requirements',$data);
        $this->load->view('admin/footer');
    }
    public function requirementadd(){
        __Islogin();
        $data['selected'] = 'management';
        $data['customers'] = $this->uM->get_total_customers();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/handlerequirement');
        $this->load->view('admin/footer');
    }
    public function add_requirement(){
        $post = $this->input->post();
        $price = $post['budget_min'].'_'.$post['budget_max'];
        $data = array(
            "title" => $post['title'],
            "description" => $post['description'],
            "price" => $price,
            "currency" => $post['currency'],
            "owner" => $post['owner']
        );
        $this->rM->add_requirement($data);
        redirect(base_url().'admin/management/requirements');
    }

    public function edit_requirement($id){
        $post = $this->input->post();
        $price = $post['budget_min'].'_'.$post['budget_max'];
        $data = array(
            "title" => $post['title'],
            "description" => $post['description'],
            "price" => $price,
            "currency" => $post['currency'],
            "owner" => $post['owner']
        );
        $this->rM->edit_requirement($id,$data);
        redirect(base_url().'admin/management/requirements');
    }

    public function requirementedit($id){
        __Islogin();
        $data['requirement'] = $this->rM->get_requirement_by_id($id);

        $data['selected'] = 'management';
        $data['customers'] = $this->uM->get_total_customers();
        $this->load->view('admin/header' , $data);
        $this->load->view('admin/handlerequirement' , $data);
        $this->load->view('admin/footer');
    }

    public function requirementdelete($id){
        $this->rM->delete_requirement($id);
        redirect(base_url().'admin/management/requirements');
    }

    

    public function devicedelete($id){
        $this->dM->delete_device($id);
        redirect(base_url().'admin/management/devices');
    }
}
