<?php
error_reporting(1);
session_start();
extract($_REQUEST);
$name=$_SESSION['eid'];
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($name=="")
{
header("location:index.php");
}
?>


	 
	<br/><br/>
	 <a href="?con=fdbk"><font color="#660066" size="+2">Feedback(
	 <?php
	 include("config.php");
$count=0;
$sel=mysqli_query($conn,"select * from fdbk");
$count=mysqli_num_rows($sel);
echo $count;
	 ?>)</font>
	</a>

	</div>
</div>

<?php
switch($_REQUEST['con'])
{


		case 'fdbk':include("fdbk.php");
        break;

}
		
	
		?>
	
</div>
</div>

</body>