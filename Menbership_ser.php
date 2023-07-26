<?php
include "db2.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $em=$_POST['em'];
    $mobile=$_POST['mb'];
    $dt=$_POST['dt'];
    $ap=$_POST['class1'];
    $ad=$_POST['ad'];
    $class=$_POST['class'];		
		
		$query="INSERT INTO `ser_mem1`(`User_Name`, `Email`, `Mobile_no`, `Address`, `Date`, `Appointment_Time`, `Service_combo`)  VALUES ('$name','$em',' $mobile','$ad','$dt','$ap','$class')";
		//$resultset=mysqli_query($con,$query);
		if ($con->query($query) === TRUE)
		{
			echo "<script type='text/javascript'>alert('Record Inserted Successfully!');</script>";
		}
		else 
		{
			echo "<script type='text/javascript'>alert('Error during insertion!');</script>";
			
		}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f44.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form method="post">
    <H3><span>Register your Service</span></H3>
        <br><p><input type="text" id="name" name="name" placeholder="Enter your name" value="<?php if(isset($_POST['submit']))echo $_POST['name'];?>" required></input></p><br>
        <p><input type="email" id="em" name="em" placeholder="Enter your Email" value="<?php if(isset($_POST['submit']))echo $_POST['em'];?>" required></input></p><br>
        <p><input type="text" id="mb" name="mb" placeholder="Mobile Number" maxlength="10" value="<?php if(isset($_POST['submit']))echo $_POST['mb'];?>" required></input></p><br>
            <p><input type="text" id="ad" name="ad" placeholder="Address" value="<?php if(isset($_POST['submit']))echo $_POST['ad'];?>" required></input></p><br>
            <p><input type="date" id="dt" name="dt" placeholder="Date (YYYY-MM-DD)" value="<?php if(isset($_POST['submit']))echo $_POST['dt'];?>" required></input></p><br>
            <p><label>Appointment Time </label><select  id="class1" name="class1"> <option>9AM-11AM</option><option>1PM-3PM</option><option>5PM-7PM</option></select></input></p><br>
            <p><label>Service Type: </label><select  id="class" name="class"> <option>2 in 1 combo</option><option>30% off</option><option>2 in 1 combo</option><option>20% off</option></select></input></p><br>
            <BR><p style="text-align:center"><span><input type="submit" name="submit" Value="Register" required></input></span></p>
    </form>
</div>
</body>
</html>