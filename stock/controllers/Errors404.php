<?php
class Errors404 extends CI_Controller {
    public function __contruct()
    {
        parent::__construct();
    }
	public function index()
	{
		// $this->load->view('welcome_message');
        echo '404 Not found';
	}
}
