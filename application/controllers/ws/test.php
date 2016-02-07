<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller
{
	public function index()
	{
		$colors = array(
			'007AFF',
			'FF7000',
			'FF7000',
			'15E25F',
			'CFC700',
			'CFC700',
			'CF1100',
			'CF00BE',
			'F00'
		);

		$userColor = array_rand($colors);
		$this->smarty->assign('user_color', $colors[$userColor]);
		
		$this->view('ws/test');
	}
}