<?php
include "db2.php";
if(isset($_POST['update']))
{
		$name=$_POST['nm'];
		$em=$_POST['rn1'];
		$mobile=$_POST['mb'];
		$ad=$_POST['ad'];
		$dt=$_POST['dt'];
		$ap=$_POST['ap'];
		$class=$_POST['class'];
		
		
		$query= "UPDATE `ser_reg12` SET `User_Name`='$name',`Email`='$em',`Mobile_no`='$mobile',`Address`='$ad',`Date`='$dt',`Appointment_Time`='$ap',`Service_type`='$class' WHERE 'Email'='$em'";
		//$resultset=mysqli_query($con,$query);
		if ($con->query($query) === TRUE)
		{
			echo "<script type='text/javascript'>alert('Record updated Successfully!');</script>";
		}
		else 
		{
			echo "<script type='text/javascript'>alert('Error during updation!');</script>";
			
		}
	
}
?>

<html>
<head>
<link rel="stylesheet" href="update.css">
</head>
<body>
<div class="container">
    <form method="post">
        <H3><span>Update your Service</span></H3>
        <p><input type="email" id="rn" name="rn" placeholder="Enter your Email" value="<?php if(isset($_POST['submit1']))echo $_POST['rn'];?>" required></input></p>
        <BR><p style="text-align:center"><input type="submit" name="submit1" Value="Fetch" required></input></p>
    
<?php 
if(isset($_POST['submit1']))
{
								$rn1=$_POST['rn'];
								$qs = "SELECT * FROM `ser_reg12` WHERE Email='$rn1'";
								$rs = mysqli_query($con,$qs);
								while($row=mysqli_fetch_array($rs))
								{
										$db_name=$row['User_Name'];
										$db_email=$row['Email'];
										$db_Mb=$row['Mobile_no'];
										$db_Add=$row['Address'];
										$db_date=$row['Date'];
										$db_ap=$row['Appointment_Time'];
										$db_SC=$row['Service_type'];
									  
								}
}
?>

<p><input type="text" id="nm" name="nm" placeholder="Enter Your Name" value="<?php if(isset($_POST['submit1']))echo $db_name;?>" ></input></p>
<br><p><input type="email" id="rn1" name="rn1" placeholder="Enter Your Mail" value="<?php if(isset($_POST['submit1']))echo $db_email;?>" ></input></p>
<br><p><input type="text" id="mb" name="mb" placeholder="Enter Your Mobile No" value="<?php if(isset($_POST['submit1']))echo $db_Mb;?>" ></input></p>
<br><p><input type="text" id="ad" name="ad" placeholder="Enter Address" value="<?php if(isset($_POST['submit1']))echo $db_Add;?>" ></input></p>
<br><p><input type="Date" id="dt" name="dt" placeholder="Enter Date" value="<?php if(isset($_POST['submit1']))echo $db_date;?>" ></input></p>
<br><p><label>Appointment Time: </label><select  id="ap" name="ap"><option><?php if(isset($_POST['submit1']))echo $db_SC;?> </option><option>9AM-11AM</option><option>1PM-3PM</option><option>5PM-7PM</option></select></input></p>
<br><p><label>Service type: </label><select  id="class" name="class"><option><?php if(isset($_POST['submit1']))echo $db_SC;?> </option>  <option>Periodic Maintainance, Price(Rs 200)</option><option>Multi Point Check, Price(Rs 180)</option><option>Seasonal Car Check, Price(Rs 150)</option><option>Battery Check, Price(Rs 180)</option><option>Electronic diagnosis, Price(Rs 200)</option><option>Air conditional services, Price(Rs 280)</option><option>Engin and car diagnostic check, Price(Rs 250)</option><option>Oil and filter change, Price(Rs 250)</option><option>Break Repair, Price(Rs 200)</option><option>Car safety feature check, Price(Rs 150)</option><option>Car bulb check, Price(Rs 220)</option><option>Car repair service, Price(Rs 180)</option><option>Tyre service Price(Rs 300)</option></select></input></p><br>
<p style="text-align:center"><input  type="submit" name="update" Value="Update" required></input></p>





</form>
</div>
</body>
<html>