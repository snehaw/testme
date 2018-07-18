<?php
	session_start();
    ob_start();

if((empty($_SESSION["USERNM"])))
{
        header('location:http://localhost:4567/vagrant/php7.1/mini_car_inventory/application/views/login.php');
}