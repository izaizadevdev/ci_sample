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
		if (!empty($_GET)) {
			// detail page
			self::_set_get_params_validation($_GET, true);
			if ($this->form_validation->run() === true) {
				$articleId = $this->input->get('aid');
				$article = self::getArticles($articleId);
				
				if (empty($article)) {
					show_404();
				}
				
				$this->smarty->assign('article', $article);
				$this->view('news/detail');
			} else {
				show_404();
			}
		} else {
			// list page
			$articles = self::getArticles();
			$this->smarty->assign('articles', $articles);
			$this->view('news/list');
		}
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
	
	private function _set_get_params_validation($params)
	{
		if (empty($params)) {
			return false;
		}
		$this->form_validation->set_data($params);
		
		$validation = array(
			array(
				'field' => 'aid',
				'label' => 'article id',
				'rules' => 'numeric'
			)
		);
		
		$this->form_validation->set_rules($validation);
	}
}