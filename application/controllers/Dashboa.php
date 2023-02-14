<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboa extends CI_Controller {

	public function login()
	{
        $this->load->view('admin/login');


	}

	public function dasha()
	{
		$data['head_title'] = "Dashboard";

		$this->load->view('admin/headera',$data);
		$this->load->view('admin/dasha',$data);
		$this->load->view('admin/footera',$data);

	}

	public function user()
	{
		$data['head_title'] = "User dashboad";

		$data['dt'] = $this->Musers->getData();
		$this->load->view('admin/headera',$data);
		$this->load->view('admin/users/read');
		$this->load->view('admin/footera');

	}

	
}
