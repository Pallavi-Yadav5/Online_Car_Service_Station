<?php
include "db1.php";
if(isset($_POST['Submit']))
{

$username=$_POST['uname'];
$password=$_POST['pass'];

$query="SELECT Password FROM `login` WHERE `Email_Id` = '$username'";
$rs = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($rs))
		{
			 $db_pass=$row['Password'];				
		}

if($db_pass == $password)
{
		session_id('ty');
		session_start();
		$_SESSION['Email_Id']=$username;	
		echo '<script type="text/javascript">'; 
		echo 'alert("Login Success!");';  
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
else
{
  	echo '<script type="text/javascript">'; 
		echo 'alert("Login Failed!");'; 
		echo '</script>';
}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="f2.css">
<title>Login</title>
</head>

<body>
<div class="container">
<form id="form1" name="form1" method="post" action="">
<H2><span>Login to your Accunt</span></H2>
  
  <center><table style="width: 261px; height: 129px; border: 0; background-color: black;">
    <tr>
      <td>Username</td>
      <td><input name="uname" type="text" id="uname" placeholder="Email" required/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="pass" type="password" id="pass" required /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Login" />
      </div></td>
    </tr>
  </table>
  </center>
</div>
</form>
</body>
</html>