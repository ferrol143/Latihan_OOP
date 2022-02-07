<?php

class Database{
	
	private $conn;

	public function __construct(){
		$conn =	mysqli_connect("localhost","root","","latihan_oop");
	}
		
}
?>