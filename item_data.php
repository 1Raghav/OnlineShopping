<!DOCTYPE html>

    <head>
	<style>
	
	table{
		
		border-collapse: collapse;
		width:100%;
	}
	td,th{
		
		border:1px solid #dddddd;
		text-align: center;
		padding: 8px;
	}
	tr:nth-child(even){
		background-color: #dddddd;
	}
	
	</style>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'admin_header.php';
            ?>
            <br><br><br>
           <div class="container">
                <div class="row">
                    
                        
                            <div class="panel-heading">
                               
                            <br><br><center><table><thead>
<body>

<br><br><center><table><thead>
<tr>
  <th><center>USER ID</center></th>
 
  <th><center>ITEM ID</center></th>
  <th><center>STATUS</center></th>
 
  </tr>
  </thead></center></body>
  </html>
  
  
  <?php
  
  include("connection.php");
  $view_data="select * from users_items ";
  $run=mysqli_query($con,$view_data);
  while($row=mysqli_fetch_array($run))
  {
	  $user_id=$row[0];

	  $item_id=$row[1];
	  $status=$row[2];
	 
	  ?>
	          <tr>
			  <td><?php echo $user_id; ?></td>
			  
			<td><?php echo $item_id; ?></td>
			  <td><?php echo $status; ?></td>
			 
			  </tr>
			  
  <?php } ?>