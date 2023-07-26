<?php
$host="localhost";
$user="root";
$pass="";
$databse="Mini_pro";

//$con=mysql_connect($host,$user,$pass,$databse);
$con=mysqli_connect('localhost','root','','Mini_pro');
if (!$con)
{
	die("Connection Failed:".mysqli_connect_error());
}
else
{
	echo "<script type='text/javascript'>alert('Databse Connection Successful');</script>";
	
}


?>