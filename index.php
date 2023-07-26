<?php
include "db1.php";

if(isset($_POST['Submit']))
{

$username=$_POST['uname'];
$password=$_POST['pass'];

$query="SELECT Password FROM `login1` WHERE `Email_Id` = '$username'";
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
    echo 'window.location.href = "membership.html";';
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="f2.css">

    <title>Car service station</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-warning fixed-top" style="background:transparent;">
            <button class="navbar-toggler btn btn-light btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: orangered;"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mini_project/about_us.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="web/Services.html">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Ser_reg.php">Register service station</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <br><br><br><br>
        
    
  <div class="row">
    <div class="col-sm-6">
      <div class="card-99 text-left">
        <div class="card-body">
          <br><br>
          <h1 class="card-title" style="font-family: 'Times New Roman'; color: white; font-weight: bolder; margin-left: 15px;"><span>GoCar</span></h1>
          <p style="margin-left: 15px; font-size:18px;">The GoCar will enable any car user to search and communicate with available car sevises at our car service station. The goal of GoCar is to produce an interactive and entertaining relation with customers.</p>
        <a href="Service_Reg.php" class="btn btn-warning" style="margin-left: 15px; width: 40%;">Register Your Service</a><br><br>
        <a href="php/view1.php"><button type="button" class="btn btn-warning" style="margin-left: 15px; width: 40%;" >View Your Service</button></a>
       <br><br><a href="updt.php"><button type="button" class="btn btn-warning "style="margin-left: 15px; width: 40%;">Update Your Service</button></a>
        <br><br><a href="php/Delete.php"><button type="button" class="btn btn-warning "style="margin-left: 15px; width: 40%;">Delete Your Service</button></a> 
       </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card-9 text-center">
        <div class="card-body">
        <form id="form1" name="form1" method="post" action="" ><br><br>
        <H2><span>Membership Login</span></H2>
        <br><br>
        <center><table style="width: 261px; height: 129px; border: 0; background-color: black; color: white;">
            <tr>
            <td>Username</td>&nbsp;&nbsp;&nbsp;
            <td><input name="uname" type="text" id="uname" placeholder="Email" required /></td>
            </tr>
            <tr>
            <td>Password</td>&nbsp;&nbsp;&nbsp;
            <td><input name="pass" type="password" id="pass"  placeholder="Password" required/></td>
            </tr>
            <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Login" />
            </div></td>
            </tr>
        </table>
        </center>
        </div>
        <p class="text-center text-white mt-5 mb-0">Dont have an account? <a href="login1.php" class="fw-bold text-body "><u class="text-warning">Create here</u></a></p>
        
</form>
        </div>
      </div>
    </div>
  </div>

<BR><BR><BR><BR>
        <div id="demo" class="carousel slide" data-ride="carousel"bg-transparent >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img1.jpg" alt="Los Angeles" width="100%" height="500" >
                        <div class="carousel-caption">
                            <h1 style="font-weight: bold; ">GoCar</h1>
                            <br><a href="web/Services.html" ><button type="button" class="btn btn-warning badge-pill font-weight-bold">Pick your Service</button></a>
                        </div>   
                </div>
                <div class="carousel-item">
                    <img src="img2.jpg" alt="Chicago" width="100%" height="500">
                        <div class="carousel-caption">
                            <h1 style="font-weight: bold; ">GoCar</h1>
                            <br><a href="web/Services.html" ><button type="button" class="btn btn-warning badge-pill font-weight-bold">Pick your Service</button></a>
                        </div>   
                </div>
                <div class="carousel-item">
                    <img src="img3.jpg" alt="New York"width="100%" height="500">
                        <div class="carousel-caption">
                            <h1 style="font-weight: bold; ">GoCar</h1>
                            <br><a href="web/Services.html" ><button type="button" class="btn btn-warning badge-pill font-weight-bold">Pick your Service</button></a>
                        </div>   
                </div>
            </div>
          
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
    </div>

    
  </header>
        <br><br><br><br>
    <h1 style="font-weight: bold; text-align: center; font-family: 'Times New Roman';"><span>Our Services</span></h1>
    <br><br><br><br>


    <div class="container">
      
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
          <center><img src="Car2.png" class="card-img-top" alt="..."></center>
          <div class="card-body" >
          <center><h5 class="card-title"><span><strong>Inspection & Checks</strong></span><br></h5></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="car repair.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
          <center><h5 class="card-title">
            <span><strong>car repair and service</strong></span>
             </h5></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="Tyre.png"  class="second card-img-top" alt="..."></center>
          <div class="card-body" >
          <center><h5 class="card-title"><span><strong>Tyre service</strong></span><br><br>
              </h5></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="car-battery.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
            <center><h5 class="card-title"><span><strong>Electronic Searvice</strong></span><br><br></h5></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="ac.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
          <center><h5 class="card-title"><span><strong>Air Conditional Services</strong></span></h5>
          </center></div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="engin service.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
          <center><h5 class="card-title"><span><strong>Engine Service</strong></span></h5></center>

          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="brake.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
          <center><h5 class="card-title"><span><strong>Brake Service</strong></span></h5></center>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card" style="background-color: black;">
        <center><img src="carlight.png" class="card-img-top" alt="..."></center>
          <div class="card-body">
          <center><h5 class="card-title"><span><strong>Car Bulb Check</strong></span></h5>
        </center>
          </div>
        </div>
      </div>
      
    </div>
      
      
    </div>
    <!-- /.container -->
          <br> 
          <br> 
          <br> 
          <br> 
          <br>
          <h1 style="font-weight: bold; text-align: center; font-family: Arial; "><span><u>GoCar Service - Guide Overview</u></span></h1>
          <br>
          <br>
          
          <div class="card-deck">
            <div class="card">
                <img src="Sefty.jpg" class="card-img-top-1" alt="..."></a>
                <div class="card-body" style="background-color: black;">
                    <h5 class="card-title-1" ><span>Handy guide</span></h5>
                    <p class="card-text" style="color: white;">You had a car accidant- whatshould you do next? The accident guide of GoCar Service station gives you important tips and advice in the worst case senario.</p>
                    <br><a href="Guide1.html"><button type="button" class="btn btn-warning badge-pill">View</button></a>
                  </div>  
            </div>
            <div class="card">
              <img src="battery1.jpg" class="card-img-top-1 " alt="...">
                <div class="card-body"style="background-color: black;">
                    <h5 class="card-title-1"><span>Battery guide</span></h5>
                    <p class="card-text" style="color: white;">The most frequent cause of vehicle breakdowns is a defective battery. With our Battery Guide, you ensure better battery maintenance and can give your battery a helping hand as well as other useful advice.</p>
                    <a href="Guide2.html"><button type="button" class="btn btn-warning badge-pill">View</button></a>
                  </div>
            </div>
            <div class="card">
              <img src="Fule1.jpg" class="card-img-top-1" alt="...">
                <div class="card-body "style="background-color: black;">
                    <h5 class="card-title-1"><span>Fuel saving guide</span></h5>
                    <p class="card-text"style="color: white;">The fuel saving guide of GoCar Service will make efficient driving easy and reduce long-term fuel consumption.</p>
                    <br><br><a href="Guide3.html"><button type="button" class="btn btn-warning badge-pill">View</button></a>
                  </div>
            </div>
              <div class="card">
                <img src="tyre1.jpg" class="card-img-top-1" alt="...">
                  <div class="card-body" style="background-color: black;">
                      <h5 class="card-title-1"><span>Tyre guide</span></h5>
                      <p class="card-text" style="color: white;">What are the points to watch with regard to cleaning, storing and changing tyres? Our Tyre Guide contains important information and valuable advice to make sure you never lose your grip.</p>
                      <br><a href="Guide4.html"><button type="button" class="btn btn-warning badge-pill">View</button></a>
                    </div>
              </div>
        </div><br><br><br><br>

          <div class="card text-center">
            <div class="card-body" style="background-color: black;">
              <h5 class="card-title">Why to choose GoCar Services</h5>
              <p class="card-text" style="color: white;">GoCar Car Service should be your preferred car servicing provider because we have the knowledge and procedures to deliver the highest levels of safety and reliability.<br><br>Firstly, GoCar Car Service have an unrivaled knowledge of manufacturers’ guidelines for the steps involved in servicing. They will never deviate from them or cut corners in any way. In addition, they will always use genuine spare parts and high-quality materials.<br><br>GoCar Car Service are defined by their integrity. With other car servicing offers you may find yourself suspecting that problems have been identified unnecessarily, but GoCar Car Service always has the customer’s best interests at heart.<br><br>In fact, if you do choose to have your car serviced at GoCar Car Service workshop, you will benefit with all Bosch Car Service annual maintenance packages. As a result, you will have a great feeling of an extended protection for your car.</p>
            </div>
          </div><br><br>


          <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3><span>Services</span></h3>
                            <ul>
                                <li><a href="#">Inspection & Checks</a></li>
                                <li><a href="#">car repair and service</a></li>
                                <li><a href="#">Tyre service</a></li>
                                <li><a href="#">Electronic Searvice</a></li>
                                <li><a href="#">Air Conditional Services</a></li>
                                <li><a href="#">Engine Service</a></li>
                                <li><a href="#">Brake Service</a></li>
                                <li><a href="#">Car Bulb Check</a></li>

                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3><span>About us</span></h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3><span>GoCar</span></h3>
                            <p>The GoCar will enable any car user to search and communicate with available car sevises at our car service station. The goal of GoCar is to produce an interactive and entertaining relation with customers.</p>
                        </div>
                        <div class="it col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-snapchat"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                    </div>
                    <p class="copyright">GoCar © 2021</p>
                </div>
            </footer>
        </div>

          



          
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>