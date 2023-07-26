<?php
include "db2.php";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $cn=$_POST['cn'];
    $pass=$_POST['pass'];
    
    
    $query="INSERT INTO `login1`(`Email_Id`, `Contact_No`, `Password`) VALUES ('$email','$cn','$pass')";
		//$resultset=mysqli_query($con,$query);
		if ($con->query($query) === TRUE)
		{
			echo "<script type='text/javascript'>alert('Account Created Successfully!');</script>";
           
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
    <link rel="stylesheet" href="effect2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Create Account</title>
    
</head>
<body>
<div class="container">
    <form method="post">
    <H3><span>Create Account</span></H3>
    <p><input type="email" id="email" name="email" placeholder="Email address" value="<?php if(isset($_POST['submit']))echo $_POST['email'];?>" required></input></p><br>
        <p><input type="text" id="cn" name="cn" placeholder="Phone number" maxlength="10" value="<?php if(isset($_POST['submit']))echo $_POST['cn'];?>" required></input></p><br>
        <p><input type="password" id="pass" name="pass" placeholder="Create Password" value="<?php if(isset($_POST['submit']))echo $_POST['pass'];?>" required></input></p><br>
            
            <p style="text-align:center"><span><input type="submit" name="submit" Value="Create Account" required></input></span></p>
            <br><br><h5 style="text-align:center;">Have an Account? <span><a href="index.php">Log in</span> </h5></a>
        </form>
</div>
</body>
</html>