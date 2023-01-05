<?php
	
	spl_autoload_register('myAutoloader');

		function myAutoloader($classname){
			$path = "classes/";
			$extension = ".class.php";
			$fullpath = $path . $className . $extension;

		if (!file_exists($fullpath)){
			return false;
		}
		include_once $fullPath;
	}
?>