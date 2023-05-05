<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Akun Kas';

		$this->layout('akun/index', $data);
	}
}

/* End of file Akun.php and path \application\controllers\Akun.php */
