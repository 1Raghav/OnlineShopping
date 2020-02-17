<?php
session_start();
?>
	
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css"></link>
	</head>
	
	<h1>WELCOME TO ADMIN PAGE</h1>
	<form action="admin.php" method="post">
	
			<center>
			<p>ENTER THE USERNAME AND PASSWORD</P>
			<input type="text" name="uname" placeholder="enter the username"style="width:200px; margin-left:140px;">
			<input type="password" name="pwd" placeholder="enter the password"style="width:200px; margin-left:140px;">
			<input type="submit" name="login" value="login"style="width:200px; margin-left:140px;">
			</center>
		
		</form>
	
	</html>
	
<?php
	
	if(isset($_POST['admin']))
	{
		$USERNAME=$_POST['uname'];
		$PASSWORD=$_POST['pwd'];
		
		include("connection.php");
		$check_users="SELECT * FROM USERS WHERE USERNAME='$USERNAME' AND PASSWORD='$PASSWORD'";
		$run=mysqli_query($con,$check_admin_users);
		if(mysqli_num_rows($run))
		{
			$_SESSION['ADMIN_USERS']=$USERNAME;
			header("LOCATION:user_registration.php");
		}
		else
		{
			echo '<script>';
			echo 'alert("invalid username/password")';
			echo '</script>';
		}
	}
	?>