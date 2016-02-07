<?php
$lang = getBrowserLang();
$site = 'http://cisample.localhost/';
switch ($lang) {
	case 'jp':
		header('Location: ' . $site . 'jp/');
		break;
	case 'en':
		header('Location: ' . $site . 'en/');
		break;
	case 'th':
	default:
		header('Location: ' . $site . 'th/');
		break;
}

function getBrowserLang($defaultLang = 'th')
{
	$result = '';
	if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
		$languages = array_reverse($languages);

		foreach ($languages as $lang) {
			if (preg_match('/^ja/i', $lang)) {
				$result = 'jp';
			} elseif (preg_match('/^en/i', $lang)) {
				$result = 'en';
			} elseif (preg_match('/^th/i', $lang)) {
				$result = 'th';
			}
		}
	}

	return $result ?: $defaultLang;
}