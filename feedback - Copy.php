<?php
session_start();
?>
	
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css"></link>
	</head>
	<center><br>
	<h1 style="color:blue; text-shadow: 2px 2px;">WELCOME TO FEEDBACK PAGE</h1><br>
        <p style=" color:blue; ">FEEDBACK</p>
<div align="center">
	<form action="feedback.php" method="post">
	
			
			
            
                        <input type="text" name="uname" placeholder="NAME"><br><br>
			<input type="email" name="email" placeholder="EMAIL"><br><br>
                        <input type="contact" name="contact" placeholder="CONTACT"><br><br>
			<input type="text" name="message" placeholder="MESSAGE"><br><br>
			<input type="submit" name="submit" value="SUBMIT"><br><br>
			
		
		</form></div>
	
	</html>
	
<?php
if(isset($_POST['submit']))
{
	require 'connection.php';
	$name=mysqli_real_escape_string($con,$_POST['uname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$contact=mysqli_real_escape_string($con,$_POST['contact']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	$query="insert into feedback(name,email,contact,message)values('$name','$email','$contact','$message')";
	$run=mysqli_query($con,$query);	
	echo '<script>';
		echo 'alert("FEEDBACK updated successfully")';
		echo '</script>';
}
?>