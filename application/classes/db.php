<?php
/**
* Database operation class
* Author: Sneha Wakode
*/
class Db
{
	private $db;
	private $host;
	private $username;
	private $password;
	public $conn;
	private static $db_con;

	/*
	* constructor
	*/
	function __construct(string $username, string $password, string $database, string $host = 'localhost')
	{
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->db = $database;
	}

	/*
	* Connecion to database
	*/
	public function connect()
	{
		try {
			// create a connection with config data
			$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);

			// check if connected successfully to database
			if(mysqli_connect_errno()) {
				return mysqli_connect_error();
			} else {
				return true;
			}
		} catch (Exception $e) {
			// error message
			return $e->getMessage();
		}

	}

	/*
	* get data from database
	*/
	public function get_data (string $stmt)
	{
		if(!empty($stmt)) {

			$result = mysqli_query($this->conn, $stmt);
			if(mysqli_error() == '')
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		} else {
			return false;
		}
	}

	/*
	* Used to create an insanse of the class
	*/
	static function use_db()
	{
		if(NULL == self::$db_con){
			self::$db_con = new Db('root','root', 'car_inventory');
			return self::$db_con;
		}
	}
}
