<?php

function getURL()
{
	$url = $_SERVER['REQUEST_URI'];
	$url = strtok($url, '?');
	
	return $url;
}
?>