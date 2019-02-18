<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$v_num = $_POST['vehicleno'];
$present = "SELECT * FROM `parking` WHERE vehicle='$v_num'";
$present_sub = mysqli_query($con, $present);
$present_find = mysqli_fetch_row($present_sub);
if($present_find!=0)
{
date_default_timezone_set("Asia/Kolkata");
$out_time = date('h:i:s');
//echo $out_time;
$time_out = "UPDATE log_book SET time_out='$out_time' WHERE vehicle_no='$v_num'";
$time_out_submit = mysqli_query($con, $time_out);
//echo "querry successfull";
$time_in = "SELECT `time_in`, `cost` FROM `log_book` WHERE vehicle_no ='$v_num'";
$time_in_querry = mysqli_query($con, $time_in);
$time_in_querry1= mysqli_fetch_array($time_in_querry);
$time_in_submit = $time_in_querry1['time_in'];
$cost = $time_in_querry1['cost'];
$detail = "SELECT `slot`, `number` FROM `parking` WHERE vehicle='$v_num'";
$detail_sub = mysqli_query($con, $detail);
$detail_sub1= mysqli_fetch_array($detail_sub);
$slot2=$detail_sub1['slot'];
$num2=$detail_sub1['number'];
$totype="SELECT `type_id` FROM `vehicle_details` WHERE vehicle_no='$v_num'";
$totype1= mysqli_query($con, $totype);
$totype2= mysqli_fetch_array($totype1);
$totype3 = $totype2['type_id'];
switch ($totype3)
{
case 1:$vtable='cycle_park';    break;
case 2:$vtable='motorbike_park';    break;
case 3:$vtable='four_park';    break;
case 4:$vtable='heavyload_park';    break;
}
$parkdel = "UPDATE `$vtable` SET `$slot2`= '0' WHERE count='$num2'";
$parkdel2 = mysqli_query($con, $parkdel);

$delete = "DELETE FROM `parking` WHERE vehicle='$v_num'";
$delete_sub= mysqli_query($con, $delete);
}
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
                <div class="panel panel-danger">
                
                    <div class="panel-heading"> <h2>Bill</h2></div>
                    <div class="panel-body">
                        <br>
                        <br>
                        <?php 
                        if($present_find!=0)
                        {
                        //echo $time_in_submit,$cost;
                         echo "your log in time = ".$time_in_submit."<br>";
                         echo "your log out time =".$out_time."<br>";
                         echo "total cost =".$cost."<br>";
                        }
                        else {
                            echo "your vehicle is not parked"."<br>";
                        }
                         ?>
                        <br>
                        <div class="panel-footer">
                        <a href="index.php"><input type="button" value="DONE" class="btn btn-primary"></a>
                        </div>
                    </div>
                    </div>
                    </div>
        </center>
    </body>
</html>
