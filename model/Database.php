<?php 
class Database{
	static private $instance = null;
	public $conn;
	private function __construct(){
		$this->conn = mysqli_connect("localhost","root","","movies");
	}
	static function getInstance (){
		if(!self::$instance){
			self::$instance = new Database;
		}
		return self::$instance;
	}
}