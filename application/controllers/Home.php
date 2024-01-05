<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $system_name;
    private $login_id;
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');    
        error_reporting(0);  
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

        $this->system_name = $this->db->get_where('settings', array('setting_type' => 'system_name'))->row()->description;
        $this->login_id = $this->session->userdata('login_id');
    }

	public function index()
	{
		$data['page_name']='food';
		$this->load->view('home/layouts/main',$data);
	}
	public function ecomecers()
	{
		$data['page_name']='ecomecers';
		$this->load->view('home/layouts/main',$data);
	}
	public function grocery()
	{
		$data['page_name']='grocery';
		$this->load->view('home/layouts/main',$data);
	}
	public function real()
	{
		$data['page_name']='realestate';
		$this->load->view('home/layouts/main',$data);
	}
	public function testomonial()	
	{

		$this->load->view('backend/admin/testomonial');
	}
	/*public function testomonial_insert()
	{
		$post=$this->input->post();

		$data=[
			'name'=>$post['name'],
			'client'=>md5($post['clinet']) 	

		];
		$user=$this->crud_model->create_testomonial($data);
	}*/
	public function conditions($type){
        if($type=='terms'){
            $title='Terms & Conditions';
        }elseif($type=='privacy'){
            $title='Privacy Policy';
        }
        $page_data['page_title'] = $title;
        $page_data['page_name'] = 'conditions';
        $page_data['condition'] = $this->db->get_where('settings', array('setting_type' => $type))->row()->description;
        $page_data['type'] = $type;
        $this->load->view('front/index', $page_data);
    }
    /*function contact(){
        if($this->input->post()){
            $input=$this->input->post();
            $inputData=array(
                'name'=>$input['name'],
                'email'=>$input['email'],
                'mobile'=>$input['phone'],
                'subject'=>$input['subject'],
                'message'=>$input['message']
            );
            $res=$this->crud_model->saving_insert_details('feeling_formal',$inputData);
            if($res>0){
                $this->session->set_flashdata('feeling_success','We Will Contact you soon...!');
            }else{
                $this->session->set_flashdata('feeling_error','Not Submited');
            }
            redirect($this->session->userdata('last_page'));
        }
        $page_data['page_title']="Contact Us";
        $page_data['page_name']="contact";
        $this->load->view('front/index',$page_data);
    }*/
     
}
