<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends MY_Controller {

	/**
	 * Top Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		// Get news data from DB.
		$newsTable = 'articles';
		$query = $this->db->get($newsTable);
		
//		$where = array('news_id' => 2);
//		$query = $this->db->get_where($newsTable, $where);

//		$sql = '
//			SELECT title 
//			FROM news 
//		';
//		$query = $this->db->query($sql);
		
		$news = array();
		// check data exist.
		if (0 < $query->num_rows()) {
			// get one record.
			//$news = $query->row();
			
			// get all records (object).
			//$news = $query->result();
			// get all records (array).
			$news = $query->result_array();
			//echo '<pre>'; var_dump($news); echo '</pre>';
		}
		
		// get config.
		//$test = $this->config->get('base_url');
		//$test2 = $this->jphpmailer->unMS('hogehoge');
		//$test3 = $this->phpexcel->getID();
		//$test4 = $this->utils->getRandomString();

		$this->smarty->assign('news', $news);
		
		$this->view('top');
	}
}
