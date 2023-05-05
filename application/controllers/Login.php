<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('OAuth');
	}

	public function index()
	{
		if ($this->session->has_userdata('is_login')) {
			redirect(base_url('dashboard'));
		}

		if ($this->input->post()) {
			$email = $this->input->post('user');
			$password = $this->input->post('password');

			$rules = [
				[
					'field' => 'user',
					'label' => 'Username or email',
					'rules' => 'trim|required',
					'errors' => array(
						'required' => '%s harus diisi!',
					),
				],
				[
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required',
					'errors' => array(
						'required' => '%s harus diisi!',
					),
				]
			];

			$this->form_validation->set_rules($rules);

			if ($this->form_validation->run() != false) {
				// cek email atau username di database
				$user = $this->OAuth->getByEmailOrUsername($email);
				if ($user) {
					if (password_verify($password, $user->password)) {
						// password benar, lanjut set session
						$array = array(
							'is_login' => true,
							'username' => $user->username,
							'nama' => $user->nama,
							'email' => $user->email,
						);

						$this->session->set_userdata($array);

						redirect(base_url('dashboard'));
					} else {
						// password salah
						$this->session->set_flashdata('error', 'Password salah!');
						return $this->load->view('login');
					}
				} else {
					// user tidak ditemukan
					$this->session->set_flashdata('error', 'Username atau email tidak ditemukan!');
					return $this->load->view('login');
				}
			} else {
				return $this->load->view('login');
			}
		} else {
			$this->load->view('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect(base_url('auth/login'));
	}
}

/* End of file Login.php and path \application\controllers\Login.php */
