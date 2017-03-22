<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="#" method="post">
	
	<input type="text" name="username" placeholder="Username"><br>
	<input type="text" name="password" placeholder="password"><br>
	<input type="submit" name="submit" value="submit" id="submit">


</form>





<?php 

	require_once "db.php";

	$db = new dbclass;

	
	if(isset($_POST['submit'])){
			$db->connectDb();
			$db->createDb();
			$db->selectDb();
			$db->createTable();
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "INSERT INTO user(username,password) VALUES('$username','$password')";

		$db->insert($sql);
	}



 ?>
</body>
</html>



