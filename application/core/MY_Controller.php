<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function isLogin()
	{
		if (!$this->session->userdata('is_login')) {
			redirect('auth/login');
		}
	}

	public function layout($viewname, $data)
	{
		$this->isLogin();

		$data['contents'] = $this->load->view($viewname, $data, true);
		$this->load->view('layouts/template', $data, false);
	}
}
