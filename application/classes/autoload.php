<?php
require_once 'session.php';
/*
* auto loader for the system
* Sneha Wakode
*/

spl_autoload_register('custom_autoloader');

function custom_autoloader($file_name)
{
	require_once $file_name . '.php';
}