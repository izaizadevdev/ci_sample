<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$mode = $this->input->post('mode');
		switch ($mode) {
			case 'confirm' :
				self::confirm();
				break;
			case 'submit' :
				self::submit();
				break;
			default:
				$this->view('register/form');
				break;
		}
	}
	
	/**
	 * Confirm action
	 */
	public function confirm()
	{
		// validation
		self::_set_validation();
		if ($this->form_validation->run() === true) {
			$hiddenList = $this->form_validation->getValues();
			$this->smarty->assign('hidden_list', $hiddenList);
			$this->view('register/confirm');
		} else {
			//var_dump(form_error());
			$this->smarty->assign('errors', validation_errors());
			$this->logs->writeLog('validate error');
			$this->view('register/form');
		}
	}
	
	/**
	 * Submit action
	 */
	public function submit()
	{
		self::_set_validation();
		if ($this->form_validation->run() === true) {
			// 送信処理
			$data = $this->form_validation->getValues();
			$hash = $this->utils->hash_pbkdf2_sha256($data['password'], $data['name']);
			
			$submitData = array(
				'username'			=> $data['name'],
				'email'				=> $data['email'],
				'password'			=> $hash,
				'is_enabled'			=> 1,
				'modified_datetime'		=> $this->utils->getCurrentDatetime(),
				'registered_datetime'	=> $this->utils->getCurrentDatetime()
			);
			
			$this->db->insert($this->userTableName, $submitData);
			$user = self::getUserFromPwd($hash);
			
			if (empty($user)) {
				$errInfo = 'Regsitered user is failed.';
				$this->smarty->assign('error_info', $errInfo);
				$this->view('error');
			} else {
				$this->smarty->assign('submit_data', $data);
				$this->view('register/submit');
			}
		}
	}
	
	private function _set_validation()
	{
		$validation = array(
			array(
				'field'	=> 'name',
				'label'	=> 'name',
				'rules'	=> 'trim|required|min_length[5]|max_length[255]|htmlspecialchars'
			),
			array(
				'field'	=> 'email',
				'label'	=> 'email',
				'rules'	=> 'trim|required|valid_email'
			),
			array(
				'field'	=> 'password',
				'label'	=> 'password',
				'rules'	=> 'trim|required|alpha_numeric|min_length[5]|max_length[20]|htmlspecialchars|matches[passconf]'
			),
			array(
				'field'	=> 'passconf',
				'label'	=> 'password confirm',
				'rules'	=> 'trim|required|alpha_numeric'
			)
		);
		
		$this->form_validation->set_rules($validation);
	}
	
	private function getUserFromPwd($pwd = '')
	{
		try {
			$pwd = $this->utils->trimEmspace($pwd);
			if (!$pwd) {
				throw new Exception(__FUNCTION__ . ' : $pwd is not valid variable.');
			}
			
			$where = array('password' => $pwd, 'is_enabled' => 1);
			$query = $this->db->get_where($this->userTableName, $where);
			
			if ($query->num_rows() <= 0) {
				return null;
			}
			
			return $query->row();
		} catch (Exception $e) {
			$this->utils->outputExceptionMessage($e);
		}
	}
}