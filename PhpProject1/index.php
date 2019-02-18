<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo "vehicle" ?></title>
        <link rel="stylesheet" href="bootstrap/bootstrap1/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/bootstrap1/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/bootstrap1/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    <body>
        <?php
        // put your code here
        $con = mysqli_connect("localhost", "root","","vehicle")
        
                or die(mysqli_error($con));
        ?>
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
                <div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> signup</a></li>
                        <li><a href="search.html"><span class="glyphicon glyphicon-search"></span> search</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="col-xs-12" id="banner_image">
                <div class="container">
                    <center>
                    <div id="banner_content1">
                        <h2>Welcome!!!</h2>
                        <marquee><p>find a perfect place to park your car</p></marquee>
                   
                        <div id="container1"><a href="register.html"><input type="submit" value="Register" class="btn btn-success"></a></div>
                        <div  id="container1"><a href="park.html"><input type="submit" value="park my vehicle" class="btn btn-success"></a></div>
                <div  id="container1"><a href="search.html"><input type="submit" value="where is my vehicle" class="btn btn-success"></a></div>
                <div id="container1"><a href="bill.html"><input type="submit" value="Bill" class="btn btn-success"></a></div>
                <div id="container1"><a href="emotydisp.html"><input type="submit" value="Space available" class="btn btn-success"></a></div>
                <div id="container1"><a href="infovehicle.php"><input type="submit" value="parked vehicle info" class="btn btn-success"></a></div>
            </div>
                         </div> 
                    
       </div>
        </div>
       <footer id="foot">
            <center>
                <div class="container">
                <p>“Copyright © vehicle parking. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000”</p>
                </div>
            </center>
        </footer>
        
    </body>
</html>
