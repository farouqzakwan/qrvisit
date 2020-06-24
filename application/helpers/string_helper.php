<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('rmvSpaces')) {
	function rmvSpaces($string)
	{
		return str_replace(' ', '', trim($string));		
	}
}

if (!function_exists('rmvSpecialCharacter')) {
	function rmvSpecialCharacter($string)
	{
		return preg_replace('/[^a-zA-Z0-9]/','', $string);
	}
}
?>