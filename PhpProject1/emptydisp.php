<?php
$con = mysqli_connect("localhost", "root","","vehicle")or die(mysqli_error($con));
$vehicle_type = $_POST['vtype1'];
switch ($vehicle_type)
 {
 case 'cycle':
     $vtype_table= cycle_park;
     $floor2 = 1;
     break;
 case 'motor cycle':
     $vtype_table=motorbike_park;
     $floor2=2;
     break;
 case 'four wheeler':
     $vtype_table=four_park;
     $floor2=3;
     break;
 case 'heavy load vehicle':
     $vtype_table=heavyload_park;
     $floor2=4;
     break;
 }
$empspace = "SELECT * FROM `$vtype_table`";
$empspace1 = mysqli_query($con, $empspace) or die(mysqli_error($con));



?>
<!DOCTYPE html>

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
        <?php
        
      switch ($floor2)
        {
            case 1 : ?> var img1="pics/cycle.jpg"<?php
            break;
            case 2 : ?> <var>img1="pics/bike.jpg"</var><?php
            break;
            case 3 : ?> <var>img1="pics/car.jpg"</var><?php
            break;
            case 4 : ?> <var>img1="pics/truck.jpg"</var><?php
            break;
        }
        ?>
        <div class="container" id="cont2">
            <h1><?php echo $vtype_table;?></h1>
        <table>
            <tbody>
                <tr>
                    <th>COUNT</th>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
                </tr>
                
                <?php while($row3 = mysqli_fetch_array($empspace1)){ ?>
                <tr>
                    <?php $count7 = $row3['count'] ?>
                    <td><?php echo $count7;?></td>
                    <td><?php if ($row3['A']==1){ ?>
                       
                        <?php 
                        $find_no = "SELECT `vehicle` FROM `parking` WHERE floor='$floor2' and slot = 'A' and number='$count7' ";
                        $find_no1 = mysqli_query($con, $find_no) or die;
                        $find_no2 = mysqli_fetch_array($find_no1);
                        $find_no3 = $find_no2[0];
                        
        
                        switch ($floor2)
                        {
                            case 1 : ?><img src="pics/cycle.jpg" alt="cycle" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 2 : ?><img src="pics/bike.jpg" alt="bike" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 3 : ?><img src="pics/car.jpg" alt="car" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 4 : ?> <img src="pics/truck.jpg" alt="truck" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        }

                        
                   } 
                     
                   else { ?>
                        <img src="" alt="empty">
                      <?php } ?>
                    </td>
                
                    <td><?php if ($row3['B']==1){ ?>
                        <?php 
                        $find_no = "SELECT `vehicle` FROM `parking` WHERE floor='$floor2' and slot = 'B' and number='$count7' ";
                        $find_no1 = mysqli_query($con, $find_no) or die;
                        $find_no2 = mysqli_fetch_array($find_no1);
                        $find_no3 = $find_no2[0];
                        switch ($floor2)
                        {
                            case 1 : ?><img src="pics/cycle.jpg" alt="cycle" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 2 : ?><img src="pics/bike.jpg" alt="bike" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 3 : ?><img src="pics/car.jpg" alt="car" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 4 : ?> <img src="pics/truck.jpg" alt="truck" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        }
                    }
                    else {?>
                        <img src="" alt="empty">
                      <?php } ?>
                    </td>
               
                    <td><?php if ($row3['C']==1){ ?>
                        <?php 
                        $find_no = "SELECT `vehicle` FROM `parking` WHERE floor='$floor2' and slot = 'A' and number='$count7' ";
                        $find_no1 = mysqli_query($con, $find_no) or die;
                        $find_no2 = mysqli_fetch_array($find_no1);
                        $find_no3 = $find_no2[0];
                         switch ($floor2)
                        {
                            case 1 : ?><img src="pics/cycle.jpg" alt="cycle" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 2 : ?><img src="pics/bike.jpg" alt="bike" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 3 : ?><img src="pics/car.jpg" alt="car" height="100" width="100"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        case 4 : ?> <img src="pics/truck.jpg" alt="truck" height="150" width="150"><h3><?php echo $find_no3; ?></h3><?php
                            break;
                        }

                        }
                    else {?>
                        <img src="" alt="empty">
                      <?php } ?>
                    </td>
                </tr>
                
                <?php } ?>   
       
            </tbody>
        </table>
        </div>
        
    </body>
</html>