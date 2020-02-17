	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css"></link>
	</head>
	<center><br>
	<h1 style="color:blue; text-shadow: 2px 2px;"l>PRODUCT RATING</h1><br>
	
<div align="center">
	<form action="" method="post">
<input type='text' name='uname' placeholder="NAME"><br><br>    
 <select name='product_id'>
 <option >PRODUCT ID</option> 
 
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  <option >6</option>
  <option >7</option>
  <option >8</option>
  <option>9</option>
  <option >10</option>
  <option >11</option>
  </select><BR><BR><BR>
  
  <select name='rating'>
 <option >RATING</option> 
 <option >0</option>
  <option >1</option>
  <option >2</option>
  <option >3</option>
  <option >4</option>
  <option >5</option>
  
  </select><BR>
  <BR>
  <input type='submit' name='submit' value='SUBMIT'>
  </form></div>
</html>
<?php
if(isset($_POST['submit']))
{
	require 'connection.php';
	$name=mysqli_real_escape_string($con,$_POST['uname']);
	$product_id=mysqli_real_escape_string($con,$_POST['product_id']);
	$rating=mysqli_real_escape_string($con,$_POST['rating']);
	
	$query="insert into rating(name,product_id,rating)values('$name','$product_id','$rating')";
	$run=mysqli_query($con,$query);	
	echo '<script>';
		echo 'alert("RATING updated successfully")';
		echo '</script>';
}
?>


