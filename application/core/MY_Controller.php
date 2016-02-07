<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $template;
	
	public $userTableName = 'users';
	public $newsTableName = 'articles';
	
	public function __construct()
	{
		try {
			parent::__construct();
			$this->load->library('session');
			$this->load->database();
			
			// Smarty setting.
			$this->smarty->template_dir = APPPATH . 'views/templates';
			$this->smarty->compile_dir  = APPPATH . 'views/templates_c';
			$this->template = 'layout.tpl';

			// auto loading config data.
			// /application/config/config.php
			// /application/config/my_custom_config.php
			$conf = $this->config->getAll();
			
			// get language file
			$accessLang = self::getAccessLang();
			if (!$accessLang) {
				$browserLang = self::getBrowserLang();
				$browserLang = !$browserLang ? $browserLang : $this->config->get('default_lang');
				$this->session->set_userdata('lang', $browserLang);
			} else {
				$this->session->set_userdata('lang', $accessLang);
			}
			
			$sessionLang = $this->session->userdata('lang');
			$this->smarty->assign('ses_lang', $sessionLang);
			$langData = self::_set_lang($sessionLang);
			$this->smarty->assign('lang_data', $langData);
			if (!empty($conf)) {
				$langConfigFile = APPPATH . 'config/my_lang_config.php';
				if (file_exists($langConfigFile)) {
					$langConfig = $this->config->item('lang_config', FALSE, TRUE);
					$config = array_merge($conf, $langConfig[$sessionLang]);
				} else {
					$config = $conf;
				}
				
				$this->smarty->assign('config', $config);
			}
		} catch (Exception $e) {
			$this->utils->outputExceptionMessage($e);
		}
	}
	
	public function view($template)
	{
		//$this->template = $template;
		$this->template = $template . '.tpl';
	}

	public function _output($output)
	{
		if (strlen($output) > 0) {
			echo $output;
		} else {
			$this->smarty->display($this->template); 
		}
	}
	
	private function _set_lang($langFlag = 'ja')
	{
		if (strcmp($langFlag, 'ja') == 0) {
			$lang = $this->lang->load('custom', 'japanese', TRUE);
		} else if (strcmp($langFlag, 'en') == 0) {
			$lang = $this->lang->load('custom', 'english', TRUE);
		} elseif (strcmp($langFlag, 'th') == 0) {
			$lang = $this->lang->load('custom', 'thai', TRUE);
		} else {
			die("_set_lang error : unknown language -> {$langFlag}");
		}

		return $lang;
	}
	
	private function getBrowserLang($defaultLang = 'th')
	{
		$result = '';
		if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
			$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
			$languages = array_reverse($languages);

			foreach ($languages as $lang) {
				if (preg_match('/^ja/i', $lang)) {
					$result = 'ja';
				} elseif (preg_match('/^en/i', $lang)) {
					$result = 'en';
				} elseif (preg_match('/^th/i', $lang)) {
					$result = 'th';
				}
			}
		}

		return $result ?: $defaultLang;
	}
	
	private function getAccessLang()
	{		
		$page = $_SERVER['PHP_SELF'];
		if ($page) {
			if (strpos($page, 'jp') !== FALSE) {
				$lang = 'ja';
			} elseif (strpos($page, 'en') !== FALSE) {
				$lang = 'en';
			} elseif (strpos($page, 'th') !== FALSE) {
				$lang = 'th';
			} else {
				die("getAccessLang error : unknown language -> {$page}");
			}

			return $lang;
		} else {
			return null;
		}
	}
}
