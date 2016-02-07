<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if ($this->session->userdata('is_login') == false) {
			redirect(null, 'location');
		}
	}
	
	public function index()
	{
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		
		redirect(null, 'location');
	}
}