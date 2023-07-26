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
    
		$query="INSERT INTO `ser_reg12`(`User_Name`, `Email`, `Mobile_no`, `Address`, `Date`, `Appointment_Time`, `Service_type`)  VALUES ('$name','$em',' $mobile','$ad','$dt','$ap','$class')";
		//$resultset=mysqli_query($con,$query);
		if ($con->query($query) === TRUE)
		{
			echo "<script type='text/javascript'>alert('Record Inserted Successfully!');</script>";
            header('location:index.php');
		}
		else 
		{
			echo "<script type='text/javascript'>alert('Error during insertion!');</script>";
		}
        if(isset($_POST['submit']))
        {
            'window.location.href = "index.html";';
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
    <script src="RG_JS.js"></script>
    <script>
        function myfun(){
            var a= document.Rg.em.value;
            if(a.indexOf('@')<=0){
                document.getElementById("Message").innerHTML="**invalid @ position";
                return false;
            }
        }
    </script>
    <title>Document</title>
    
</head>
<body>
<div class="container">
    <form method="post"  name="Rg" onsubmit="retutn myfun()">
    <H3><span>Register your Service</span></H3>
        <br><p><input type="text" id="name" name="name" placeholder="Enter your name" value="<?php if(isset($_POST['submit']))echo $_POST['name'];?>" required></input></p><br>
        <p><input type="email" id="em" name="em" placeholder="Enter your Email" value="<?php if(isset($_POST['submit']))echo $_POST['em'];?>"></input></p><br><span id="Message"></span>
        <p><input type="text" id="mb" name="mb" placeholder="Mobile Number"  maxlength="10" value="<?php if(isset($_POST['submit']))echo $_POST['mb'];?>" required></input></p><br>
            <p><input type="text" id="ad" name="ad" placeholder="Address" value="<?php if(isset($_POST['submit']))echo $_POST['ad'];?>" required></input></p><br>
            <p><input type="Date" id="dt" name="dt" placeholder="Date (YYYY-MM-DD)" value="<?php if(isset($_POST['submit']))echo $_POST['dt'];?>" required></input></p><br>
            <p><label>Appointment Time </label><select  id="class1" name="class1"> <option>9AM-11AM</option><option>1PM-3PM</option><option>5PM-7PM</option></select></input></p><br>
            <p><label>Service Type: </label><select  id="class" name="class"><option>Periodic Maintainance, Price(Rs 200)</option><option>Multi Point Check, Price(Rs 180)</option><option>Seasonal Car Check, Price(Rs 150)</option><option>Battery Check, Price(Rs 180)</option><option>Electronic diagnosis, Price(Rs 200)</option><option>Air conditional services, Price(Rs 280)</option><option>Engin and car diagnostic check, Price(Rs 250)</option><option>Oil and filter change, Price(Rs 250)</option><option>Break Repair, Price(Rs 200)</option><option>Car safety feature check, Price(Rs 150)</option><option>Car bulb check, Price(Rs 220)</option><option>Car repair service, Price(Rs 180)</option><option>Tyre service Price(Rs 300)</option></select></input></p><br>
            <BR><p style="text-align:center"><span><input type="submit" name="submit" Value="Register" required></input></span></p>
    </form>
</div>
</body>
</html>