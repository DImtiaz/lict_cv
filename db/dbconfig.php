<?php 
		
		class dbclass{
			private $host = "localhost";
			private $user = "root";
			private $pass = "";

			private $connect;
			private $dbname = "lict";

			public function dbconnect(){
			$this->connect = mysqli_connect($this->host, $this->user, $this->pass);
			if(!$this->connect){
				$this->error = "Error connecting database".$this->connect->connect_error;
				echo $this->error;
				return 0;
			}
		}

		public function createdb(){
			$createdbquery = "CREATE DATABASE IF NOT EXISTS lict";
			$createdb = $this->connect->query($createdbquery);
			if(!$createdb){
				echo "Error creating database";
			}
			else{
				echo "Database connection OK<br>";
			}
		}


		public function selectdb(){
			mysqli_select_db($this->connect, $this->dbname);
		}

		public function createLoginTable(){
			$createtablequery = "CREATE TABLE IF NOT EXISTS user(
			id int(10) AUTO_INCREMENT PRIMARY KEY,
			name varchar(50),
			username varchar(50),
			password varchar(50),
			user_type_id int(1),
			status varchar(10)
			)";

			$createtable = $this->connect->query($createtablequery);
			if(!$createtable){
				echo "Error Creating Table".mysqli_error($this->connect);
			}
			else{
				echo "Table creation OK";
			}
		}


		public function createUserTypeTable(){
			$createtablequery2 = "CREATE TABLE IF NOT EXISTS usertype(
			id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			typename varchar(50) 
			)";
			$createtable2 = $this->connect->query($createtablequery2);

			if(!$createtable2){
				echo "Error Creating Type Table".mysqli_error($this->connect);
			}

			else{
				echo "Type Table OK";
			}
		}

		public function createMetaTypeTable(){
			$createtablequery3 = "CREATE TABLE IF NOT EXISTS usertypemeta(
			id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			metakey varchar(255),
			metavalue varchar(255),
			usertypeid varchar(255)
			)";

			$createtable3 = $this->connect->query($createtablequery3);

			if(!$createtable3){
				echo "Error creating Meta table".mysqli_error($this->connect);
			}
			else{
				echo "Meta table OK";
			}
		}


		public function createBasicInfoTable(){
			$createtablequery4 = "CREATE TABLE IF NOT EXISTS basicinfo(
			id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
			name varchar(100),
			email varchar(100),
			phone varchar(20),
			address varchar(100),
			social varchar(100),
			profilePic varchar(100)
			)";

			$createtable4= $this->connect->query($createtablequery4);

			if(!$createtable4){
				echo "basic table not created".mysqli_error($this->connect);
			}
			else{
				echo "Basic Info Table OK";
			}
		}



		public function select($sql){
			$success = $this->connect->query($sql);
			if(!$success){
				echo "error fetching data".mysqli_error($this->connect);
			}
			else{
				return $success;
			}
		}






		}

















?>