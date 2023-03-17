<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../propcss/display.css">
    <title>Document</title>
</head>
<body>
    
<?php 

         $DbHost = "localhost";
         $DbUser = "root";
         $DbPwd = "";
         $DbName = "hecthotels";
     
         $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die("no");
         echo'<button class="btn2" type="submit"><a href="Property.php">Add Hotel</a></button>';
         $Sql = "SELECT * FROM `hotels`";
         $result = mysqli_query($con, $Sql);
         if ($result) {
             echo '<div class="dis">';
             echo"<table >";
             while($row = mysqli_fetch_assoc($result)){
                 /*SELECT `Name`, `Location`, `ServiceNumber`,
                  `FrontView`, `PostCode`, 
                  `City`, `Country`, `Street`,
                                        `Stander`, `GuestFacilities` FROM `hotels` WHERE 1 */
                                $name = $row['Name'];
                                $location = $row['Location'];
                                $serviceNUmber = $row['ServiceNumber'];
                                $image = $row['FrontView'];
                                $Pcode = $row['PostCode'];
                                $city = $row['City'];
                                $country = $row['Country'];
                                $street = $row['Street'];
                                $stander = $row['Stander'];
                                $guest = $row['GuestFacilities'];
                                
                        echo
                        '
                        
                        <div class="content">
                         <tr class="top"> </tr>
                        <tr class="border_bottom" style="border-bottom: 1px solid black;">
                        <th> <input type="radio" name="check" id="" value="hotelid?Hname='.$name.'"></th>
                        <th scope="row">'.$name.'</th>
                        <td>'.$location.'</td>
                        <td>'.$serviceNUmber.'</td>
                        <td>'.$image.'</td>
                        <td>'.$Pcode.'</td>
                        <td>'.$city.'</td>
                        <td>'.$country.'</td>
                        <td>'.$street.'</td>
                        <td>'.$stander.'</td>
                        <td>'.$guest.'</td>
                        
                        <td>
                            <button class="btns" type="submit"><a href="update2.php?updateid='.$name.'">Update</a></button>
                            <button class="btn" type="submit"><a href="delete.php?deleteid='.$name.'">Delete</a></button>
                        </td>
                    </tr>
                   
                </div>';
                        
                    }
                    echo"</table>";
                    echo '</div>';
                    $_SESSION['hotelid'] = $_GET['Hname'];
}?>

<?php 
$sql = "SELECT * FROM `rooms` WHERE `Name` = '".$_SESSION['hotelid']."'";
if (mysqli_query($con , $sql)) {
    # code...


                 echo'<button class="btn2" type="submit"><a href="http://">Add Room</a></button>';
                 $Sql = "SELECT * FROM `rooms`";
                 $result = mysqli_query($con, $Sql);
                 if ($result) {
                     echo '<div class="dis">';
                     echo"<table >";
                     while($row = mysqli_fetch_assoc($result)){
                         /*SELECT `Name`, `Location`, `ServiceNumber`,
                          `FrontView`, `PostCode`, 
                          `City`, `Country`, `Street`,
                                                `Stander`, `GuestFacilities` FROM `hotels` WHERE 1
                                                
                                                `RomeId`, `Name`, `Floor`, `Image`, 
                                                `Price`, `RoomType`, `BathroomItems`,
                                                `NumberOfHost`, `Status`, `RoomDiscription`, `Number_Bed` */
                                        $name = $row['RomeId'];
                                        $location = $row['Name'];
                                        $serviceNUmber = $row['Floor'];
                                        $price = $row['Price'];
                                        $image = $row['Image'];
                                        $Pcode = $row['RoomType'];
                                        $city = $row['BathroomItems'];
                                        $country = $row['NumberOfHost'];
                                        $street = $row['Status'];
                                        $stander = $row['RoomDiscription'];
                                        $guest = $row['Number_Bed'];
                                        
                                echo
                                '
                                
                                <div class="content">
                                 
                                <tr class="border_bottom" style="border-bottom: 1px solid black;">
                                <th scope="row">'.$name.'</th>   
                                <td>'.$location.'</td>
                                <td>'.$serviceNUmber.'</td>
                                <td>'.$price.'</td>
                                <td>'.$image.'</td>
                                <td>'.$Pcode.'</td>
                                <td>'.$city.'</td>
                                <td>'.$country.'</td>
                                <td>'.$street.'</td>
                                <td>'.$stander.'</td>
                                <td>'.$guest.'</td>
                                <td>'.$name.'</td>
                                <td>
                                    <button class="btns" type="submit"><a href="http://">Update</a></button>
                                    <button class="btn" type="submit"><a href="http://">Delete</a></button>
                                </td>
                            </tr>
                           
                        </div>';
                                
                            }
                            echo"</table>";
                            echo '</div>';

        }
        
    }?>

</body>
</html>