<?php
/* date code 
$date = date('Y-m-d h:i:s')."<br/>";
echo $date;
date_default_timezone_set("Asia/Kolkata");
$time = date('h-i-s a');
//$time1 = time();
//echo $time1."<br/>";
echo  $time;*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*static $count = 0;
 echo $count;
 $count+=1;
 $con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));*/
/* $ow1="SELECT `owner_id` FROM `vehicle_details` WHERE vehicle_no='yy77'";
$ow1_q = mysqli_query($con, $ow1);
$ow1_fetch = mysqli_fetch_array($ow1_q);
$owid = $ow1_fetch[0];
echo $owid;*/
/*$vlocation = "SELECT * FROM `parking` WHERE vehicle='ka02'";
$vlocation_submit= mysqli_query($con, $vlocation);
$vlocation1 = mysqli_fetch_array($vlocation_submit);
$floor1 = $vlocation1['floor'];
$slot1 = $vlocation1['slot'];
$numb1 = $vlocation1['number'];
echo $floor1,$numb1,$slot1;*/
/*$detail = "SELECT `slot`, `number` FROM `parking` WHERE vehicle='6678'";
$detail_sub = mysqli_query($con, $detail);
$detail_sub1= mysqli_fetch_array($detail_sub);
$slot2=$detail_sub1['slot'];
$num2=$detail_sub1['number'];
echo $num2,$slot2;
 switch (1)
{
case 1:$vtable='cycle_park';    break;
case 2:$vtable='motorbike_park';    break;
case 3:$vtable='four_park';    break;
case 4:$vtable='heavyload_park';    break;
}
$parkdel = "UPDATE `$vtable` SET `$slot2`= '0' WHERE count='$num2'";
$parkdel2 = mysqli_query($con, $parkdel)or die(mysqli_error($con));
echo 'success';*/
/*$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
$user_present = "SELECT * FROM `owner_details` WHERE o_fname='prajwal' and o_lname='shenoy'";
 $user_present_submit = mysqli_query($con, $user_present);
//$user_present_row = mysqli_fetch_row($user_present_submit);
// if($user_present_row==0)
 //{
 //echo "empty";
 //}
 //else {
//echo  "success";    
//}
 $user_present1= mysqli_fetch_assoc($user_present_submit);
 
 $user_present_owner = $user_present1['owner_id'];
 echo $user_present_owner;*/
/*$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
 
 
 

$display ="SELECT l.vehicle_no,od.owner_id,od.o_fname,pk.floor,pk.slot,pk.number, l.date, l.time_in, l.time_out, l.cost FROM `log_book` l, `owner_details` od ,`parking` pk,`vehicle_details` vd WHERE pk.vehicle=l.vehicle_no AND pk.vehicle=vd.vehicle_no AND vd.owner_id=od.owner_id GROUP BY floor,slot,number";
$display1 = mysqli_query($con, $display);
$display2 = mysqli_fetch_array($display1);
echo $display2[0];
echo $display2['vehicle_no'];
echo $display2[1];
echo $display2['owner_id'];
echo $display2[2];*/
/*
    <?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
$vehicle_type = $_POST['vtype1'];
switch ($vehicle_type)
 {
 case 'cycle':
     $vtype_table= cycle_park;
     break;
 case 'motor cycle':
     $vtype_table=motorbike_park;
     break;
 case 'four wheeler':
     $vtype_table=four_park;
     break;
 case 'heavy load vehicle':
     $vtype_table=heavyload_park;
     break;
 }
$empspace = "SELECT * FROM `$vtype_table`";
$empspace1 = mysqli_query($con, $empspace) or die(mysqli_error($con));
$empspace2 = mysqli_fetch_array($empspace1);

Vehicle parking
var img1="pics/cycle.jpg
?>*/
/*$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
$time_in = "SELECT `time_in`, `cost` FROM `log_book` WHERE vehicle_no ='w123'";
$time_in_querry = mysqli_query($con, $time_in);
$time_in_querry1= mysqli_fetch_array($time_in_querry);
$time_in_submit = $time_in_querry1['time_in'];
$cost = $time_in_submit['cost'];
echo $cost;*/
/*CREATE TRIGGER time_in BEFORE UPDATE on parking
FOR EACH ROW
INSERT INTO log_book
SET date1=date('Y-m-d');
The following query has failed: "CREATE PROCEDURE `cost_update`(IN `time_in1` TIME, IN `time_out1` TIME, IN `cost1` INT(11)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER IF (TIMEDIFF(time_out,time_in1)>1 AND TIMEDIFF(time_out,time_in1)<3) RETURN cost1*2; ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,time_in1)<4) RETURN cost1*3; ELSEIF (TIMEDIFF(time_out,time_in1)>3 AND TIMEDIFF(time_out,time_in1)<5) RETURN cost1*4; ELSEIF (TIMEDIFF(time_out,time_in1)>6) RETURN cost1*5; ELSE RETURN cost;"

MySQL said: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'RETURN cost1*2; ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,tim' at line 2
Routines  Documentation
Name	Action	Type	Returns
	display	Edit Edit	Execute Execute	Export Export	Drop Drop	PROCEDURE	
With selected:  Check all With selected:  Export Export Drop Drop
 New
 Add routine  Documentation

    
    
    The following query has failed: "CREATE PROCEDURE `cost_update`(IN `time_in1` TIME, IN `time_out1` TIME, IN `cost1` INT(11)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER IF (TIMEDIFF(time_out,time_in1)>1 AND TIMEDIFF(time_out,time_in1)<3) RETURN cost1*2; ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,time_in1)<4) RETURN cost1*3; ELSEIF (TIMEDIFF(time_out,time_in1)>3 AND TIMEDIFF(time_out,time_in1)<5) RETURN cost1*4; ELSEIF (TIMEDIFF(time_out,time_in1)>6) RETURN cost1*5; ELSE RETURN cost;"

MySQL said: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'RETURN cost1*2; ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,tim' at line 2
Routines  Documentation
Name	Action	Type	Returns
	display	Edit Edit	Execute Execute	Export Export	Drop Drop	PROCEDURE	
With selected:  Check all With selected:  Export Export Drop Drop
 New
 Add routine  Documentation

    
    The following query has failed: "CREATE PROCEDURE `cost_update`(IN `time_in1` TIME, IN `time_out1` TIME, IN `cost1` INT(11)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER IF (TIMEDIFF(time_out,time_in1)>1 AND TIMEDIFF(time_out,time_in1)<3) RETURN cost1*2; ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,time_in1)<4) RETURN cost1*3; ELSEIF (TIMEDIFF(time_out,time_in1)>3 AND TIMEDIFF(time_out,time_in1)<5) RETURN cost1*4; ELSEIF (TIMEDIFF(time_out,time_in1)>6) RETURN cost1*5; ELSE RETUR
        

IF (TIMEDIFF(time_out,time_in1)>1 AND TIMEDIFF(time_out,time_in1)<3)
RETURN cost1*2;
ELSEIF (TIMEDIFF(time_out,time_in1)>2 AND TIMEDIFF(time_out,time_in1)<4)
RETURN cost1*3;
ELSEIF (TIMEDIFF(time_out,time_in1)>3 AND TIMEDIFF(time_out,time_in1)<5)
RETURN cost1*4;
ELSEIF (TIMEDIFF(time_out,time_in1)>6)
RETURN cost1*5;
ELSE
RETURN cost;*/
/*BEGIN
?>
<?php 

create trigger capital on owner_details(before insert,before update)
{

FOR(owner_details ow : TRIGGER.new )
{
	if(ow.o_fname != NULL)
    {
    	ow.o_fname=ow.o_fname.subString(0,1).ToUpperCase()+ow.o_fname.subString(1);
        ow.o_lname=ow.o_lname.subString(0,1).ToUpperCase()+ow.o_lname.subString(1);
       }
 }  
}
 END*/