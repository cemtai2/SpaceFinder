<?php
//I don't think this is currently being used?  Can't remember why I have it...

function getURL()
{
	$url = $_SERVER['REQUEST_URI'];
	$url = strtok($url, '?');
	
	return $url;
}
?>