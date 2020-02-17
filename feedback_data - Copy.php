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
<tr>
  
  <th><center>NAME</center></th>
  <th><center>EMAIL</center></th>
  <th><center>CONTACT</center></th>
  <th><center>MESSAGE</center></th>
  </tr>
  </thead></center></body>
  </html>
  
  
  <?php
  
  include("connection.php");
  $view_data="select * from feedback";
  $run=mysqli_query($con,$view_data);
  while($row=mysqli_fetch_array($run))
  {
	  $name=$row[0];
	  $email=$row[1];
	  $contact=$row[2];
	  $message=$row[3];
	  ?>
	          <tr>
			  <td><?php echo $name; ?></td>
			  <td><?php echo $email; ?></td>
			  <td><?php echo $contact; ?></td>
			  <td><?php echo $message; ?></td>
			  </tr>
			  
  <?php } ?>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                    <a href="admin_menu.php">ADMIN MENU</a> .</p>
                   <p>This website is developed by Raghavendra and Nayana</p>
               </center>
               </div>
           </footer>
        </div>


<title></title>



