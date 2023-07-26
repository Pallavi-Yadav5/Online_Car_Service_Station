<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2.css">
</head>
<body>

    <div class="main-div">
        <div class="center-div">
        <h1><span>List of Car Service Station</span></h1><br>
            <div class="table-responsive">
                <center>
                <table style="align:center">
                    <thead>
                      <tr>
                          <th>Station Name</th>
                          <th>Contact No </th>
                          <th>Addresss</th>
                          <tbody>
                          <?php
                            include "db2.php";

                            $selectquerry="SELECT * from reg_station";
                            $query = mysqli_query($con,$selectquerry);
                            $nums = mysqli_num_rows($query);


                            while($res = mysqli_fetch_array($query)){
                                
                                ?>
                                <tr>
                                <td><?php echo $res['station_name']?></td>
                                <td><?php echo $res['Contact_No']?></td>
                                <td><?php echo $res['Address']?></td>
                                
                            </tr>

                            <?php 
                            }
                            ?>  

                          </tbody>
                      </tr>  
                    <thead>
                </table></center>
            </div>

        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

