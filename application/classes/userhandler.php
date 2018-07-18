<?php
require_once 'user.php';
$response['status'] = false;

if(!empty($_POST)) {
	if((!empty($_POST['email'])) && (!empty($_POST['password'])))
	{
		$usr = new User();
		$data = $usr->login($_POST);
		if($data == true) {
			$response['msg'] = 'Logged in!';
			$response['status'] = true;
			echo json_encode($response); exit;
		}

	} 

	$response['msg'] = 'Could not login!';
	echo json_encode($response); exit;
}

if(!empty($_GET))
{
	if(!empty($_GET['action']) && ($_GET['action'] == 'logout')) {
		$usr = new User();
		$data = $usr->logout();
		if($data == true) {
			$response['msg'] = 'Logged out!';
			$response['status'] = true;
			echo json_encode($response); exit;
		}
	}
}