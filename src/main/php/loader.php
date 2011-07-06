<?php
if (!function_exists('__autoload')) {
	function __autoload($classname) {
		$classpath = str_replace('_',DIRECTORY_SEPARATOR, $classname);
		require_once ($classpath.'.php');
	}
}
