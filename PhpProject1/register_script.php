 <!DOCTYPE html>
<?php
 $con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
 $ofname = $_POST['firstname'];
 $olname = $_POST['lastname'];
 $ophno = $_POST['phone-number'];
 $vnum = $_POST['vehicle-number'];
 $vtype = $_POST['vtype'];
 $user_present = "SELECT * FROM `owner_details` WHERE o_fname='$ofname' and o_lname='$olname'";
 $user_present_submit = mysqli_query($con, $user_present);
 $user_present_row = mysqli_fetch_row($user_present_submit);

 if ($user_present_row==0)
 {
 
 //echo $ofname,$olname,$ophno,$vnum,$vtype;
 $owner_insert_querry = "INSERT INTO `owner_details` (`owner_id`, `o_fname`, `owner_pno`, `o_lname`) VALUES (NULL, '$ofname', '$ophno', '$olname')";
 $owner_insert_querry_submit = mysqli_query($con, $owner_insert_querry) or die(mysqli_errno($con));
//echo "owner info updated";
 

 $owner_id = "SELECT owner_id FROM owner_details WHERE o_fname = '".$ofname."' AND o_lname = '".$olname."' ";
 
 $owner_id_submit1 = mysqli_query($con, $owner_id) or die('failed');
 // echo 'querry succefull';
 $owner_id_submit2 = mysqli_fetch_array($owner_id_submit1);
 $owner_id_submit = $owner_id_submit2[0];
 //echo $owner_id_submit."<br/>";
 //$trigger1 = "CREATE TRIGGER capitaltrigger BEFORE UPDATE ON owner_details FOR EACH ROW SET NEW.o_fname=UPPER(NEW.o_fname)and NEW.o_lname=UPPER(NEW.o_lname);";
 //$trigger1 = "CREATE TRIGGER capitaltrigger1 BEFORE UPDATE ON owner_details FOR EACH ROW SET NEW.o_fname=UPPER(LEFT(NEW.o_fname,1))+LOWER(SUBSTRING(NEW.o_fname,2,LEN(NEW.o_fname)));";
 //mysqli_query($con, $trigger1)or die(mysqli_error($con));
  $tig1="UPDATE `owner_details` SET `o_fname`='$ofname' WHERE `owner_id`='$owner_id_submit'";
  mysqli_query($con, $tig1);
 }
 else {
     //$t1=""
     $user_present5 = "SELECT * FROM `owner_details` WHERE o_fname='$ofname' and o_lname='$olname'";
 $user_present_submit5 = mysqli_query($con, $user_present5);
      $user_present1= mysqli_fetch_array($user_present_submit5);
 $user_present_owner = $user_present1['owner_id'];
     $owner_id_submit = $user_present_owner;
     
}
 switch ($vtype)
 {
 case 'cycle':
     $vtype_id=1;
     break;
 case 'motor cycle':
     $vtype_id=2;
     break;
 case 'four wheeler':
     $vtype_id=3;
     break;
 case 'heavy load vehicle':
     $vtype_id=4;
     break;
 }
  // echo $vtype_id."<br/>"; 
   $vehicle_present = "SELECT `vehicle_no`, `owner_id`, `type_id` FROM `vehicle_details` WHERE vehicle_no='$vnum'";
   $vehicle_present1 = mysqli_query($con, $vehicle_present);
   $vehicle_present_row = mysqli_fetch_row($vehicle_present1);
  
   $vehicle_present2 = mysqli_fetch_array($vehicle_present1);
   $vehicle_present3 = $vehicle_present2['vehicle_no'];
   $vehicle_present_owner = $vehicle_present2['owner_id'];
   if ($vehicle_present_row==0)
   {
 $vehicle_info = "INSERT INTO `vehicle_details` (`vehicle_no`, `owner_id`, `type_id`) VALUES ('$vnum', '$owner_id_submit', '$vtype_id')";
 $vehicle_info_submit = mysqli_query($con, $vehicle_info) or die(mysqli_errno($con));
   }
 else {
       $vehicle_present2 = mysqli_fetch_array($vehicle_present1);
   $vehicle_present3 = $vehicle_present2['vehicle_no'];
   $vehicle_present_owner = $vehicle_present2['owner_id'];
}
//INSERT INTO `vehicle_details` (`vehicle_id`, `type_id`, `vehicle_no`, `owner_id`) VALUES (NULL, '$vtype_id', '$vnum', '$owner_id_submit')

 //$vehicle_id = "SELECT vehicle_no FROM vehicle_details WHERE vehicle_no = '".$vnum."' and owner_id = '".$owner_id_submit."'";
// $vehicle_id_submit1 = mysqli_query($con, $vehicle_id) or die(mysqli_errno($con));
// echo 'id query exectuted';
// $vehicle_id_submit2 = mysqli_fetch_array($vehicle_id_submit1);
 //$vehicle_id_submit = $owner_id_submit2[0];
 //echo $vehicle_id_submit;
 
    

 
//$park ="INSERT INTO `parking` (`vehicle`, `floor`, `slot`, `number`) VALUES ('$vnum', '$floor', '$l', '$number')";
//$park_submit = mysqli_query($con, $park);
 
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
                            <div class="panel panel-success">
                                <div class="panel-heading"><h2>Registered</h2></div>
                                <div class="panel-body">
                                    <?php
                                    if($user_present_row==0 and $vehicle_present_row==0)
                                    {
                                     echo "USER ID =         ".$owner_id_submit."<br/>";
                                     echo "VEHICLE number =   ".$vnum."<br/>";
                                    }
                                    elseif ($user_present_row!=0 and $vehicle_present_row==0)
                                    {
                                            echo "user ID already exits and this will be stored for ur new vehicle "."<br/>";
                                        echo "USER ID =         ".$owner_id_submit."<br/>";
                                        echo "VEHICLE number =   ".$vnum."<br/>";
                                    }
                                    else{
                                        echo "your vehicle has been registered "."<br>";
                                        echo "USER ID =         ".$owner_id_submit."<br/>";
                                     echo "VEHICLE number =   ".$vnum."<br/>";
                                    }
                                    ?>
                                </div>
                                <div class="panel-footer">
                                    <a href="park.html"><input type="submit" value="NEXT" class="btn btn-danger"></a>
                                    <a href="index.php"><input type="submit" value="BACK" class="btn btn-danger"></a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
               
               </center>
      </body>
</html>
 


