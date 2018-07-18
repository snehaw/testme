<?php
require_once 'db.php';
/**
* User Class
**/
class User
{
	/*
	* User login
	*/
	public function login(array $data)
	{
		if(!empty($data)){
			$db = Db::use_db();
			$con = $db->connect();
			if($con) {
				$stmt = "SELECT *  from tb_user WHERE email = '".$data['email'] ."' AND password = '".md5($data['password'])."'";
				$reslt = $db->get_data($stmt);
				 if(is_array($reslt)) {
				 	$_SESSION["USERNM"] = $reslt[0]['email'];
				 	return true;
				 } else {
				 	return false;	
				 }
			} else {
				return $con;
			}

		}
	}

	/*
	* User Logout
	*/
	public function logout()
	{
		unset($_SESSION['USERNM']);
		return true;
	}
}