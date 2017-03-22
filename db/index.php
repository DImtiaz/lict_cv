<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
<form action="#" method="post">
	Username: <br>
	<input type="text" name="username">
	Password:<br>
	<input type="password" name="password">	
	<input type="submit" name="submit" id="submit" value="submit">
</form>




<?php
	require_once 'db/dbclearence.php';
	if (isset($_POST['submit'])) {
			$UserName=$_POST['username'];
			$Password=$_POST['password'];
			$result="select * from login where username='$UserName' and password='$Password'";

			$success = $db->select($result);
			
			$count=mysqli_num_rows($success);
			$row=$success->fetch_assoc();
		
			if ($count > 0){
			session_start();
			$_SESSION['id']=$row['id'];
			header('location:admin/starter.php?id='.$row['id'].'');
			
			}
			else
			{
				echo "enter Correct Username And Password";
			}
}

?>

</body>
</html>