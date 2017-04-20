<?php 
abstract class System{
	public static function getAll(){
		$db = Database::getInstance();
		$conn = $db->conn;
		$res = array();
		$q=mysqli_query($conn,"select * from ".static::$table);
		while($rw=mysqli_fetch_object($q,get_called_class())){
			$res[] = $rw;
		}
		return $res;
	}	
	public static function getOne($id){
		$db = Database::getInstance();
		$conn = $db->conn;
		$q=mysqli_query($conn,"select * from ".static::$table." where ".static::$id."=$id limit 1");
		return $rw=mysqli_fetch_object($q,get_called_class());
	}
	public function update(){
		$db = Database::getInstance();
		$conn = $db->conn;
		$q="update ".static::$table;
		$q.=" set ";
		$objFields = get_object_vars($this);
		foreach($objFields as $k=>$v){
			if($k==static::$id) continue;
			$q.=$k."="."'".$v."', ";
		}
		$q=rtrim($q,", ");
		$keyString = static::$id;
		$q.=" where $keyString = ".$this->$keyString;
		mysqli_query($conn, $q);
	}
	public function insert(){
		$db = Database::getInstance();
		$conn = $db->conn;
		$polja = get_object_vars($this);
		$polja_keys = array_keys($polja);
		$q="insert into ".static::$table;
		$q.=" (".static::$id.",".implode(",",$polja_keys).") ";
		$q.=" values ";
		$q.="(default,'".implode("','",$polja)."')";
		mysqli_query($conn, $q);
		$keyString = static::$id;
		$this->$keyString = mysqli_insert_id($conn);
	}
	
}