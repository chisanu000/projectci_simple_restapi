<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

    public function dashboard()
    {
        if($this->session->userdata('logged_in'))
        {
            // echo "<pre>";
            // print_r($this->session->userdata('logged_in'));
            // echo "</pre>";
            $data = array(
                'main_content' => 'backend/pages/dashboard',
                'title' => 'รายชื่อผู้ใช้',
            );
            
            // Read user table
            $data['users_data'] = $this->db->order_by("id", "desc")
            ->select('*')
            ->where('users.status', '0')
            ->from('users')
            ->get()
            ->result();

            
            $this->load->view('backend/templates/admin_template',$data);
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";

        }else{
            redirect(base_url() . 'frontend/login', 'refresh');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('logged_id');
        session_destroy();
        redirect(base_url() . 'frontend/login', 'refresh');
    }

}
