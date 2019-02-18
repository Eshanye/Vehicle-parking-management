<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ownerid = $_POST['ownerid'];
$vehicleid = $_POST['vehicleid'];
$present_allready = "SELECT * FROM `parking` WHERE `vehicle`='$vehicleid'";
$present_allready1= mysqli_query($con, $present_allready);
$present_allready2= mysqli_fetch_array($present_allready1);
if($present_allready2==0)
{
$ow1="SELECT `owner_id` FROM `vehicle_details` WHERE vehicle_no='$vehicleid'";
$ow1_q = mysqli_query($con, $ow1);
$ow1_fetch = mysqli_fetch_array($ow1_q);
$owid = $ow1_fetch[0];
if ($owid == $ownerid)
{
$vt1="SELECT`type_id` FROM `vehicle_details` WHERE vehicle_no = '$vehicleid'";
$vt1_submit= mysqli_query($con, $vt1);
$vt1_submit1= mysqli_fetch_array($vt1_submit);
$vtype_id1 = $vt1_submit1[0];
switch ($vtype_id1) {
    case 1:
    {   $cost1 = 30;
        $floor = 1;
        $x = array("A","B","C","D");
        $c = 0;
        $number = 0;
        trying:
        
          $l=$x[$c];
          //$sp = "select $l,count from cycle_park";
          $sp ="SELECT $l,count FROM `cycle_park`";
          $result = mysqli_query($con,$sp);
          if(mysqli_num_rows($result)>0)
          {
              while ($row = mysqli_fetch_assoc($result))
              {
                  $number=$row['count'];
                  if($row[$l]==0)
                  {
                      $sql = "UPDATE `cycle_park` SET $l=1 WHERE count='$number' AND $l='$l'";
                      mysqli_query($con, $sql);
                      break;
                  }
              }
          }
          if($number==10)
          {
              if($c<4)
              {
                  $c++;
                  goto trying;
              }
          }
        if($number!=0)
            echo ("".$l."<br>".$number."");
        else 
            echo ("full");
    }
            
        break;
        case 2:
        {    $cost1 = 50;
            $floor=2;
         $x = array("A","B","C","D");
        $c = 0;
        $number = 0;
        trying1:
        
          $l=$x[$c];
          //$sp = "select $l,count from cycle_park";
          $sp ="SELECT $l,count FROM `motorbike_park`";
          $result = mysqli_query($con,$sp);
          if(mysqli_num_rows($result)>0)
          {
              while ($row = mysqli_fetch_assoc($result))
              {
                  $number=$row['count'];
                  if($row[$l]==0)
                  {
                      $sql = "UPDATE `motorbike_park` SET $l=1 WHERE count='$number' AND $l='$l'";
                      mysqli_query($con, $sql);
                      break;
                  }
              }
          }
          if($number==10)
          {
              if($c<4)
              {
                  $c++;
                  goto trying1;
              }
          }
        //if($number==0)
        //echo ("full");
        }
            
        break;
    case 3:
    {    $cost1 = 100;
         $floor=3;
         $x = array("A","B","C","D");
        $c = 0;
        $number = 0;
        trying3:
        
          $l=$x[$c];
          //$sp = "select $l,count from cycle_park";
          $sp ="SELECT $l,count FROM `four_park`";
          $result = mysqli_query($con,$sp);
          if(mysqli_num_rows($result)>0)
          {
              while ($row = mysqli_fetch_assoc($result))
              {
                  $number=$row['count'];
                  if($row[$l]==0)
                  {
                      $sql = "UPDATE `four_park` SET $l=1 WHERE count='$number' AND $l='$l'";
                      mysqli_query($con, $sql);
                      break;
                  }
              }
          }
          if($number==10)
          {
              if($c<4)
              {
                  $c++;
                  goto trying3;
              }
          }
    }
    break;
    case 4:
    {    $cost1 = 170;
        $floor=4;
         $x = array("A","B","C","D");
        $c = 0;
        $number = 0;
        trying4:
        
          $l=$x[$c];
          //$sp = "select $l,count from cycle_park";
          $sp ="SELECT $l,count FROM `heavyload_park`";
          $result = mysqli_query($con,$sp);
          if(mysqli_num_rows($result)>0)
          {
              while ($row = mysqli_fetch_assoc($result))
              {
                  $number=$row['count'];
                  if($row[$l]==0)
                  {
                      $sql = "UPDATE  `heavyload_park` SET $l=1 WHERE count='$number' AND $l='$l'";
                      mysqli_query($con, $sql);
                      break;
                  }
              }
          }
          if($number==10)
          {
              if($c<4)
              {
                  $c++;
                  goto trying4;
              }
          }
    }
    break;
    default:
        break;
}

$date = date('Y-m-d');
//echo $date;
date_default_timezone_set("Asia/Kolkata");
$time = date('h:i:s');
 
 $log_book = "INSERT INTO `log_book` (`vehicle_no`,`date1`,`time_in`,`cost`) VALUES ('$vehicleid','$date','$time','$cost1')";
 $log_book_submit = mysqli_query($con, $log_book) or die(mysqli_error($con));
 

}
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
                        <div class="col-xs-8">
                            <div class="panel panel-warning">
                                <div class="panel-heading"><h2>Registered</h2></div>
                                <div class="panel-body">
                         <?php
                        if($present_allready2==0)
                        {
                        if ($ownerid==$owid)
                        {
                        if ($number!=0)
                        {
                         $park ="INSERT INTO `parking` (`vehicle`, `floor`, `slot`, `number`) VALUES ('$vehicleid', '$floor', '$l', '$number')";
                         $park_submit = mysqli_query($con, $park)or die(mysqli_error($con));
                         echo "USER ID =         ".$ownerid."<br/>";
                         echo "VEHICLE number =   ".$vehicleid."<br/>";
                         echo "Parking Location = floor: ".$floor." slot: ".$l." number: ".$number."<br/>";
                         
                        }
                        else { echo "full";}
                        
                        }
                        else { echo "invalid input";}
                        }
                        else {
                            echo "already parked";
                        }
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
 