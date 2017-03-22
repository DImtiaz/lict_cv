<?php 



	class dbclass{

		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $dbname = "querytest";

		public $connect;

		public function __construct(){

		}

		public function connectDb()			
		{
			$this->connect = mysqli_connect("$this->host" , "$this->user" , "$this->pass" );
			if($this->connect){
				echo "connected";
			}else{
				echo "not connected";
			}
		}

		public function __destruct(){

		}

		public function createDb(){
			$createdbquery = "CREATE DATABASE IF NOT EXISTS querytest";
			$createdb = $this->connect->query($createdbquery);
			if(!$createdb){
				echo "Error creating database";
			}
			else{
				echo "Database connection OK<br>";
			}
		}

		public function selectDb(){
			mysqli_select_db($this->connect, $this->dbname);
		}


		public function createTable(){
			$createtablequery = "CREATE TABLE IF NOT EXISTS user(
			id INT(3) AUTO_INCREMENT PRIMARY KEY,
			username varchar(10),
			password varchar(10)
			)";
			$createtable = $this->connect->query($createtablequery);
			if(!$createtable){
				echo "Error Creating Table".mysqli_error($this->connect);
			}
			else{
				echo "Table connection OK";
			}
		}



		public function insert($sql){
			$successinsert = $this->connect->query($sql);
			if(!successinsert){
				echo "Error Inserting Data".mysqli_error($this->connect);
			}
			else{
				echo "Data Successfully Inserted";
			}

		}



	}

	




	