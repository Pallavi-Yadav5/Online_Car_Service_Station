<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Service DETAILS</title>
    <link rel="stylesheet" href="ef1.css">
</head>
<body>
	
	<br><br><h2><span>Registered Service DETAILS</span></h2>
    <form method="post"><br><br>
    <center>
    <p><input type="text" id="p_id" name="p_id" placeholder= "Email" value="<?php if(isset($_POST['get']))echo $_POST['p_id'];?>" required></input></p>
    <p><input type="submit" name="get" value="View Details"></input></p>
    </center>
    
    <div class="table-responsive">
        <h3><table align="center" border="1">
            <thead>
                <tr>
                    <th><span>Name</span></th>
                    <th><span>Email</span></th>
                	<th><span>Mobile No</span></th>
                    <th><span>Address</span></th>
                    <th><span>Date</span></th>
                    <th><span>Appointment Date</span></th>
                    <th><span>Service Combo</span></th>


                    <tbody>
                    <?php
                        include "db2.php";
                        if(isset($_POST['get']))
						{
                            $p_id=$_POST['p_id'];
                            $selectquerry="SELECT * FROM `ser_mem1` WHERE `Email`='$p_id'";
                            $query = mysqli_query($con,$selectquerry);


                            while($res = mysqli_fetch_array($query))
                            {
                    ?>
                            <tr>
                                <td><?php echo $res['User_Name']?></td>
                                <td><?php echo $res['Email']?></td>
                                <td><?php echo $res['Mobile_no']?></td>
                                <td><?php echo $res['Address']?></td>
                                <td><?php echo $res['Date']?></td>
                                <td><?php echo $res['Appointment_Time']?></td>
                                <td><?php echo $res['Service_combo']?></td>
                            </tr>

                    <?php 
                            }
                        }
                
                    ?>  

                    </tbody>
                </tr>  
            <thead>
        </table></h3>
    </div>
    </form>
</body>
</html>

