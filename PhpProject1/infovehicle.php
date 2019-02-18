<?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$display1 = mysqli_query($con,"CALL display()");

?>

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
   
            <div class="container" id="cont2">
                <h1>vehicle information</h1>
                <table>
                    <tbody>
                        <tr>
                            <th>owner id</th>
                            <th>owner name</th>
                            <th>vehicle no</th>
                            <th>floor</th>
                            <th>slot</th>
                            <th>number</th>
                            <th>date</th>
                            <th>time in</th>
                            <th>cost</th>
                        </tr>
                        <?php while($row1 = mysqli_fetch_array($display1)){ ?>
                        <tr>
                            <td><?php echo $row1['owner_id'];?></td>
                            <td><?php echo $row1['o_fname'];?></td>
                            <td><?php echo $row1['vehicle_no'];?></td>
                            <td><?php echo $row1['floor'];?></td>
                            <td><?php echo $row1['slot'];?></td>
                            <td><?php echo $row1['number'];?></td>
                            <td><?php echo $row1['date1'];?></td>
                            <td><?php echo $row1['time_in'];?></td>
                            <td><?php echo $row1['cost'];?></td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            
        </div>
    </body>
    
</html>
