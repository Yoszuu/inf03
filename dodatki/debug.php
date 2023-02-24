<?php
	function debug($data = null){
		//		return null;
		if (defined('__APP_IN_DEBUG_MODE'))
			if (__APP_IN_DEBUG_MODE == 0)
				return null;
		echo "<pre style=\"border: solid 1px #000; background: #070; color: #dfd; font-size: 11px; text-align: left;\">";
//			if (is_string($data))
//				print_r(htmlentities($data));
//			else
//				print_r($data);
//
				$x = debug_backtrace();
				print_r($x[0]['file'].' (line: '.$x[0]['line'].')<br/>');
				print_r($x[0]['args'][0]);
			echo "</pre>";
	}
?>