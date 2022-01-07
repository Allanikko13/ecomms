<?php 

class CreateDb 
{

public $servername;
public $username;
public $password;
public $dbname;
public $tablename;
public $con;



public function __construct(
	$dbname = "Newdb",
	$tablename = "Productdb",
	$servername = "localhost",
	$username = "root",
	$password = ""
)
{
	
$this->dbname = $dbname;
$this->tablename = $tablename;
$this->servername = $servername;
$this->username = $username;
$this->password = $password;



//create new connection
$this->con = mysqli_connect($servername,$username,$password);

//check connection
if(!$this->con){
	die("Connection Failed : " .mysqli_connect_error());
}

//query
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

//execute query 
if(mysqli_query($this->con, $sql)){
	
	$this->con = mysqli_connect($servername, $username , $password , $dbname);
	
	$sql = "CREATE TABLE IF NOT EXISTS $tablename
			(productid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			product_name VARCHAR(225) NOT NULL,
			product_price FLOAT,
			product_image VARCHAR(100)
			);";
	$sql = "CREATE TABLE IF NOT EXISTS $tablename
			(productid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			product_name VARCHAR(225) NOT NULL,
			product_price FLOAT,
			product_image VARCHAR(100)
			);";
			
	if (!mysqli_query($this->con, $sql)){
	
		echo "error creating table:" .mysqli_error($this->con);
	}
	

}else{
	return false;
}
}
public function getData(){
	$sql = "SELECT * FROM $this->tablename";
	
	$result = mysqli_query($this->con , $sql);

	if(mysqli_num_rows($result) > 0){
		return $result;
	}
	
}

}

?>