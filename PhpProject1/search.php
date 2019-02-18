<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
$vno = $_POST['vnumber'];
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$vlocation = "SELECT * FROM `parking` WHERE vehicle='$vno'";
$vlocation_submit= mysqli_query($con, $vlocation);
$vlocation1 = mysqli_fetch_array($vlocation_submit);
$floor1 = $vlocation1['floor'];
$slot1 = $vlocation1['slot'];
$numb1 = $vlocation1['number'];


?>
<html>
    <head>
        <title>Vehicle</title>
        <link rel="stylesheet" href="bootstrap/bootstrap1/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap1/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap1/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Vehicle parking</a>
                </div>
            </div>
        </div>
    <center>
                    <div class="container" id="cont1">
                        <div class="col-xs-8">
                            <div class="panel panel-info">
                                <div class="panel-heading"><h2>Found ur Vehicle!!!!</h2></div>
                                <div class="panel-body">
                        <?php
                         echo "VEHICLE number =   ".$vno."<br/>";
                        // echo $floor1,$numb1,$slot1;
                         echo "Parking Location = floor : ".$floor1." slot: ".$slot1." number: ".$numb1."<br/>";
                         ?>
                                </div>
                                <div class="panel-footer">
                                    <a href="index.php"><input type="submit" value="Finish" class="btn btn-danger"></a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
               
               </center>
      </body>
</html>
 