<?php
include "db2.php";
if(isset($_POST['submit']))
{
    
    $member=$_POST['gm'];
    $ptitle=$_POST['pt'];
    $abstract=$_POST['ab'];
    	
		
		$query="INSERT INTO `reg_station`(`station_name`, `Contact_No`, `Address`) VALUES ('$member','$ptitle','$abstract')";
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
    <link rel="stylesheet" href="ser_style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Document</title>
    
</head>
<body>

<div class="container">
    <form method="post">
    <H3><span>Service Station Registration Form</span></H3>
        <br><div>
            <p><input type="text" id="gm" name="gm" placeholder="Enter name of Service Station" value="<?php if(isset($_POST['submit']))echo $_POST['gm'];?>" required></input></p><br>
            <p><input type="text" id="pt" name="pt" placeholder="Enter Contact Number"  maxlength="10" value="<?php if(isset($_POST['submit']))echo $_POST['pt'];?>" required></input></p><br>
            <p><input type="text" id="ab" name="ab" placeholder="Enter Address" value="<?php if(isset($_POST['submit']))echo $_POST['ab'];?>" required></input></p><br>
            <br><br><p style="text-align:center"><span><input type="submit" name="submit" Value="Register" required></input></span></p>
    </form>
</div>


</body>
</html>








