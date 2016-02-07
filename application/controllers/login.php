<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{	
	function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('is_login') == true) {
			redirect(null, 'location');
		}
	}
	
	public function index()
	{
		$mode = $this->input->post('mode');
		if ($mode == 'submit') {
			self::submit();
		} else {
			$this->view('login/form');
		}
	}
	
	public function submit()
	{
		self::_set_validation();
		if ($this->form_validation->run() === true) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = self::getUserByEmail($email);

			if (empty($user)) {
				// Login Failed.
				$errMsg = 'Login failed.';
				$this->logs->writeLog(__FUNCTION__ . ' : ' . $email . ' : ' . $errMsg);
				$this->smarty->assign('errors', $errMsg);
				$this->view('login/form');
			} else {
				// check password
				$hash = $this->utils->hash_pbkdf2_sha256($password, $user['username']);
				if ($hash == $user['password']) {
					// Login Do.
					$this->logs->writeLog('Login Success : user_id : ' . $user['user_id']);
					$this->session->set_userdata('is_login', true);
					$this->session->set_userdata('user', $user);
					$this->smarty->assign('user', $user);
					$this->view('login/success');
				} else {
					// Login Failed.
					$errMsg = 'Login failed.';
					$this->logs->writeLog(__FUNCTION__ . ' : ' . $email . ' : ' . $errMsg);
					$this->smarty->assign('errors', $errMsg);
					$this->view('login/form');
				}
			}
		} else {
			$this->smarty->assign('errors', validation_errors());
			$this->logs->writeLog(validation_errors(), 'validate error');
			$this->view('login/form');
		}
	}
	
	private function _set_validation()
	{
		$validation = array(
			array(
				'field' => 'email',
				'label' => 'Email address',
				'rules' => 'trim|required|valid_email'
			),
			array(
				'field'	=> 'password',
				'label'	=> 'password',
				'rules'	=> 'trim|required|alpha_numeric|min_length[5]|max_length[20]|htmlspecialchars'
			)
		);
		
		$this->form_validation->set_rules($validation);
	}
	
	private function getUserByEmail($email = '')
	{
		try {
			$email = $this->utils->trimEmspace($email);
			if (!$email) {
				throw new Exception(__FUNCTION__ . ' : $email param is empty.');
			}
			
			$where = array('email' => $email, 'is_enabled' => 1);
			$query = $this->db->get_where($this->userTableName, $where);
			if ($query->num_rows() <= 0) {
				return null;
			}
			
			return $query->row_array();
		} catch (Exception $e) {
			$this->utils->outputExceptionMessage($e);
		}
	}
	
}