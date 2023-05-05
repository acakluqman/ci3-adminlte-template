<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Transaksi';

		$this->layout('transaksi/index', $data);
	}

	public function laporan()
	{
		$data['title'] = 'Laporan Transaksi';

		$this->layout('transaksi/laporan', $data);
	}
}

/* End of file Transaksi.php and path \application\controllers\Transaksi.php */
