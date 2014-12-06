<?php
require 'helpers.php';

if (empty($_GET['url'])){
	$_GET['url'] = 'home';
	controller($_GET['url']);
	}else{
	controller($_GET['url']);
	}

?>