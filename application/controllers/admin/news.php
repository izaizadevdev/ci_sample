<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$articles = self::getArticles();
		$this->smarty->assign('articles', $articles);
		
		$this->view('admin/news/list');
	}
	
	public function form()
	{
		$this->view('admin/news/form');
	}
	
	public function confirm()
	{

	}
	
	public function submit()
	{
		
	}
	
	/**
	 * Get Articles
	 * @param int $articleId
	 * @return array
	 */
	private function getArticles($articleId = 0)
	{
		if ($articleId > 0) {
			// get one news.
			$where = array('article_id' => $articleId, 'is_enabled' => 1);
			$query = $this->db->get_where($this->newsTableName, $where);
			
			return ($query->num_rows() > 0) ? $query->row() : null;
		} else {
			// get all news.
			$where = array('is_enabled' => 1);
			$this->db->order_by('registered_datetime desc');
			$query = $this->db->get_where($this->newsTableName, $where);
			
			return ($query->num_rows() > 0) ? $query->result_array() : array();
		}
	}
}