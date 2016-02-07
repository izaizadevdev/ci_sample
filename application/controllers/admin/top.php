<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->view('admin/top');
	}
}