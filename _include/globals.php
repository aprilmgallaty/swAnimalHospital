<?php
 
	$rootLen = strlen($_SERVER['DOCUMENT_ROOT']);
	$dirLen = strlen(__DIR__);
	$subdir = substr(__DIR__, $rootLen, $dirLen - $rootLen - strlen("/_include"));
    define('INCLUDE_DIR', $_SERVER['DOCUMENT_ROOT'] . $subdir . '/_include/');
	
	$suburl = str_replace("\\", "/", $subdir);
	if ((strlen($suburl) > 3) && (substr($suburl, 0, 1) != "/")){
		$suburl = "/" . $suburl;
	}
	define('TOP_URL', $suburl . '/');
    define('INCLUDE_URL', $suburl . '/_include/');
    define('CSS_URL', $suburl . '/_css/');
    define('IMG_URL', $suburl . '/_img/');
    define('FILES_URL', $suburl . '/_files/');
    define('JS_URL', $suburl . '/_js/');
	
?>