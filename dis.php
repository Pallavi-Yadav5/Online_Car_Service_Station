<?php
    include "db2.php";

    $selectquerry="SELECT * from reg_station";
    $query = mysqli_query($con,$selectquerry);
    $nums = mysqli_num_rows($query);


    while($res = mysqli_fetch_array($query)){
        echo $res['station_name'] . "<br>" ;
    }        
?>


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
    <link rel="stylesheet" href="CSS1.css">
</head>
<body>
<div class="col-md-12 text-left">
    <a id="a" href="index.html" class="btn btn-light badge-pill ">Home Page</a>
    </div>
    <div class="main-div">
        <div class="center-div">
        <h1>List of Projects</h1><br><br><br>
            <div class="table-responsive">
                <table>
                    <thead>
                      <tr>
                          <th>Project Title</th>
                          <tbody>
                          <?php
                            include "db2.php";

                            $selectquerry="SELECT * from reg_station ";
                            $query = mysqli_query($con,$selectquerry);
                            $nums = mysqli_num_rows($query);


                            while($res = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <?php echo $res['station_name']."<br>";?></td>
                            </tr>
                            <?php 
                            }
                            ?>  

                          </tbody>
                      </tr>  
                    <thead>
                </table>
            </div>

        </div>

    </div>
    <br><br><br>
    <div class="col-md-12 text-center">
    <a id="a" href="display.php" class="btn btn-light badge-pill ">View Project Details</a>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


                                

