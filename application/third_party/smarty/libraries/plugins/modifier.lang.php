<?php
function  smarty_modifier_lang($keyStr, array $data)
{
	return array_key_exists($keyStr, $data) ? $data[$keyStr] : '';
}