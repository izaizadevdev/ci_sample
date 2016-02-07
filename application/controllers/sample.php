<?php
class Sample extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$seasons = array('春', '夏', '秋', '冬');
		$this->smarty->assign('seasons', $seasons);

		$this->view('sample');
	}
	
	public function my_action()
	{
		$configAll = $this->config->getAll();
		var_dump($configAll);
		$this->view('my_action');
	}
}