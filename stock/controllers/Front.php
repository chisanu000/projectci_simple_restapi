<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		// Load Model
		$this->load->model('UsersModel','user',true);
	}
	public function index()
	{
        // $data['main_content'] = 'frontend/pages/index';
		
		$data = array(
			'main_content' => 'frontend/pages/index',
			'title' => 'Home',
		);
		$this->load->view('frontend/templates/default_template',$data);
	}
	public function login()
	{
		$data = array(
			'main_content' => 'frontend/pages/login',
			'title' => 'เข้าสู่ระบบ',
		);
		$this->load->view('frontend/templates/default_template',$data);
	}
	public function login_process()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->user->login($email,$password);
		if($result){
			// สร้างตัวแปร Array ไว้เก็บ Session ของ User ที่ล็อกอินเข้ามา
			$sess_array = array();
			foreach($result as $row){
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username,
					'email' => $row->email,
					'fullname' => $row->fullname,
					'mobile' => $row->mobile,
					'status' => $row->status,
				);
			}
			$this->session->set_userdata('logged_in',$sess_array);
			echo "Login Success";
			print_r($sess_array);
			redirect(base_url().'backend/dashboard','refresh');
		}else{
			// Echo 'Login Fail';
			redirect(base_url().'front/login','refresh');
		}
	}
}
