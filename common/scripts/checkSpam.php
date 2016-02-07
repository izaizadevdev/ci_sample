<?php
class checkSpam
{
	public $spamStr = 'FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG';
	
	/**
	 * is include spam string data?
	 * @param string $str
	 * @return boolean
	 */
	public function isSpamData($str = '')
	{
		if (empty($str)) {
			return false;
		}
		
		return (strpos($str, $this->spamStr) !== false) ? true : false;
	}
	
	/**
	 * redirect to setting url.
	 * @param string $url
	 * @return null
	 */
	public function redirect($url)
	{
		header(sprintf('Location: %s', $url));
		exit;
	}
	
	/**
	 * quote string data.
	 * @param string $str
	 * @return string
	 */
	public function quoteData($str = '')
	{
		return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}
}