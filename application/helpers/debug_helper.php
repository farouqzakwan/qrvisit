<?php 
/**
* CUSTOM FUNCTIONS
* By: Zul Zolkaffly
*
* DISPLAY OBJECT AND ITS PROPERTIES
* FOR DEBUGGING PURPOSE
*/

if(!function_exists('debug')) {
	function debug() {
		$vars = func_get_args();
		if($vars && !empty($vars)) {
			echo "<pre>";
			foreach($vars as $item) {
				print_r($item);
				echo "<br />";
			}
			echo "</pre><br />";
		}
	}
}

if(!function_exists('debugexit')) {
	function debugexit() {
		$vars = func_get_args();
		if($vars && !empty($vars)) {
			echo "<pre>";
			foreach($vars as $item) {
				print_r($item);
				echo "<br />";
			}
			echo "</pre><br />";
			exit();
		}
	}
}

if(!function_exists('dump')) {
	function dump() {
		$vars = func_get_args();
		if($vars && !empty($vars)) {
			echo "<pre>";
			foreach($vars as $item) {
				var_dump($item);
				echo "<br />";
			}
			echo "</pre><br />";
		}
	}
}

if(!function_exists('dumpexit')) {
	function dumpexit() {
		$vars = func_get_args();
		if($vars && !empty($vars)) {
			echo "<pre>";
			foreach($vars as $item) {
				var_dump($item);
				echo "<br />";
			}
			echo "</pre><br />";
			exit();
		}
	}
}






















