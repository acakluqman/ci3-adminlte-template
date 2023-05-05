<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OAuth extends CI_Model
{
	public function rules()
	{
		return [
			[
				'field' => 'identity',
				'label' => 'Username or Email',
				'rules' => 'trim|required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required'
			]
		];
	}

	public function getByEmailOrUsername($email_username)
	{
		return $this->db->get_where('user', ['username' => $email_username])->row();
	}
}


/* End of file OAuth.php and path \application\models\OAuth.php */
