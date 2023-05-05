<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		
		$this->layout('dashboard', $data);
	}
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
