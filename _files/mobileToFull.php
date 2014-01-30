<?php

	setcookie('mobileToFull', '1', time()+60*10, '/');
	header( 'Location: ' . $_SERVER['HTTP_REFERER'] );
	
?>