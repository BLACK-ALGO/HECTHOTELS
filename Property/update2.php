<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../propcss/nav.css">
    <link rel="stylesheet" href="../propcss/prop.css">
    <title>Document</title>
</head>
<body>
<?php 

    include "../Core/connect.php";       
        $errors = array();
        print_r($_POST);
    $Name = $_GET['updateid'];
    echo $Name;

    $Sql5 = "SELECT * FROM `hotels` WHERE Name= '$Name'";
    $result = mysqli_query($con, $Sql5);

    $row = mysqli_fetch_assoc($result);
                                //$nameS = $row['Name'];
$location = $row['Location'];
$serviceNUmber = $row['ServiceNumber'];
$image = $row['FrontView'];
$Pcode = $row['PostCode'];
$city = $row['City'];
$country = $row['Country'];
$street = $row['Street'];
$stander = $row['Stander'];
$guest = $row['GuestFacilities'];
    

if( isset($_POST['Submit']) and isset($_POST['pname']) and isset($_POST['breakType'])){

    $Sql5 = "SELECT * FROM `hotels` WHERE 'Name'= '$Name'";
    $result = mysqli_query($con, $Sql5);

    $row = mysqli_fetch_assoc($result);
                                //$nameS = $row['Name'];
$location = $row['Location'];
$serviceNUmber = $row['ServiceNumber'];
$image = $row['FrontView'];
$Pcode = $row['PostCode'];
$city = $row['City'];
$country = $row['Country'];
$street = $row['Street'];
$stander = $row['Stander'];
$guest = $row['GuestFacilities'];
    $checkbox1 = $_POST['guest'];
    $chk = " ";
    foreach($checkbox1 as $chk1){
        $chk .= $chk1.",";
    }

    $country = $_POST['Country'];
    $street = $_POST['Sname'];
    $propertyNumber = $_POST['pnum'];
    $Pcode = $_POST['Pcode'];
    $city =  $_POST['city'];
    $propName = $_POST['pname'];
    #for the parkin table
    $park = $_POST['park'];
    $reservationPark = $_POST['respark'];
    $typeOfPark = $_POST['t_park'];
    $Price = $_POST['ParkPrice'];
    //echo $reservationPark;
    //echo "This values".$park.",".$reservationPark.",".$typeOfPark.",".$Price;
     #for break fast
     $Tbreak = $_POST['breakType'];
     $break = $_POST['breakfas'];
     $Price = $_POST['BreakPrice'];
    #images
    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

     /*if (empty($propName)) {
         $errors['pname']="Please give a name to your Property";
     }*/
    
     if (count($errors) == 0) {
         
         if ($error == 0) {
            if ($img_size > 125000000000000) {
                $em = "file size is too big!";
                    header("Location: Property.php?$em");
            }
            else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                echo ($img_ex);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exts = array("jpg", "jpeg","png");
          #if (in_array($img_ex_lc, $allowed_exts )) {
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                 $sql ="IUPDATE `hotels` SET 
                 `ServiceNumber`='[value-3]',`FrontView`='[value-4]',`PostCode`='[value-5]',
                 `City`='[value-6]',`Country`='[value-7]',
                 `Street`='[value-8]',`Stander`='[value-9]',`GuestFacilities`='[value-10]' WHERE `Name` = '$Name'";
             

                            
             $ans = mysqli_query($con, $sql);
             if ($ans) {
                # code...
                echo"good";
            }else{
                
                echo"bad";
            }
            $sql2 = "INSERT INTO parkimg(`ParkingType`, `FreeParking`, `ParkingPrice`, `Reservation`)
            VALUES ('$typeOfPark','$park','$Price','$reservationPark')";
                mysqli_query($con, $sql2);
            $sql3 = "INSERT INTO `breakfast`(`BreakfastType`, `BreakfastList`, `Price`)
                             VALUES ('$Tbreak','$break','$Price')";
                           # mysqli_query($con, $sql3);

                    mysqli_query($con, $sql3);
                    /*if ($re) {
                        # code...
                        echo"good";
                    }else{
                        
                        echo"Break bad";
                    }*/
                 
                       # header("Location: ./room/roms.php");
                        header("Location: ../Property/display.php?$em");
                       
            /*}
            else{
                $em = " sorry file not taken into account  !";
            header("Location: Property.php?$em");
            }*/
        }
      }
        else{
            $em = "unkown error occured!";
            
        }


        
     }
       

}

?>


   <?php include "nav_p.php"; ?>
    <div class="container">

        <form action="" method="post" >
            <div id="form1">

            


                <h3>Give hotel location</h3>
        
                <input type="text" name="Country" id="" placeholder="Country" value="<?php echo $country; ?>">
                <input type="text" name="Sname" id="sname" placeholder="Street name" value="<?php echo $street; ?>">
                <input type="number" name="pnum" id="pnum" placeholder="Property number" value="<?php echo $serviceNUmber; ?>">
                <input type="text" name="Pcode" id="Pcode" placeholder="Post Code" value="<?php echo $Pcode; ?>">
                <input type="text" name="city" id="city" placeholder="City" value="<?php echo $city; ?>"> 
                


                <div class="article">
                        <h3>During the form filling what you should consider</h3>
                        <ul>
                            <li>Spell your street name correctly</li>
                            <li>Provide the post/Zip code </li>
                            <li>Use the physical property of the property</li>
                            <li>Please fill all fields</li>
                        </ul>
                    </div>

                <div class="btn_box">
                    <button type="button" id="Next">Next</button>
                </div>
            </div> <!--</form>

            
            <form action="" method="post" id="form2">-->
            <div id="form2">
                
                    <div class="article">
                        <h3>Give the exact location of your property</h3>
                        <p>This will help our guest to locate your property from our platfrom very easily </p>
                        
                    </div>
                    <div class="map_location">
                            
                    </div>

                <div class="btn_box">
                    <button type="button" id="Back1">Prevoius</button>
                    <button type="button" id="Next2" >Next</button>
                </div>
            </div> <!--</form>

            <form action="" method="post" id="form3">-->
            <div id="form3">
                        <h3>Give your property name</h3>
                    
                    <input type="text" name="pname" id="pname" placeholder="Enter your property name" value="<?php echo $Name; ?>">
                    <label for="" id="label">Property Images</label><input type="file" name="image" value="<?php echo $image; ?>">
                    
                
                    <p>This will be the name and the images  view by guest looking for a place to sleep/stay</p>
                    

                    <div class="btn_box">
                        <button type="button" id="Back2">Prevoius</button>
                        <button type="button" id="Next3" >Next</button>
                    </div>
                </div><!--</form>


            <form action="" method="post" id="form4">-->
            <div id="form4">
                
                    <div class="article">
                    <h3>What can your guest enjoy as facilities ?</h3>

                    </div>
                    <input type="checkbox" name="guest[]" id="guest" value="Bar"><label for="" id="label1"  >Bar</label> <br>
                    <input type="checkbox" name="guest[]" id="guest" value="Garden" ><label for="" id="label1"  >Garden</label><br>
                    <input type="checkbox" name="guest[]" id="guest" value="Terrace"><label for="" id="label1" >Terrace</label> <br>
                    <input type="checkbox" name="guest[]" id="guest" value="Air condition"><label for="" id="label1" >Air condition</label><br>
                    <input type="checkbox" name="guest[]" id="guest" value="Free wifi"><label for="" id="label1" >Free wifi</label><br>
                    <input type="checkbox" name="guest[]" id="guest" value="Heating"><label for="" id="label1" >Heating</label><br>
                    <input type="checkbox" name="guest[]" id="guest" value="Swimming pool"><label for="" id="label1" >Swimming pool</label><br>
                    

                            

                <div class="btn_box">
                    <button type="button" id="Back3">Prevoius</button>
                    <button type="button" id="Next4" >Next</button>
                </div>
            </div><!--</form>


            <form action="" method="post" id="form5">-->
            <div id="form5">
                <div class="article">
                <h3>What can your guest enjoy as facilities ?</h3>

                </div>
                

                        <h3>Is breakfast free ?</h3>
                        <input type="radio" name="breakfas" id="" value="Yes, it's included"><label for="">Yes, it's included</label><br>
                        <input type="radio" name="breakfas" id="Breakfas" value="No, is payed apart"><label >No, is payed apart</label><br>
                        <input type="text" name="BreakPrice" id="" placeholder="Price for break fast">
                        <h3>List the type of breakfast you offer in your hotel</h3>
                        <input type="text" name="breakType" id="breakType" value="<?php echo $Name; ?>" placeholder="Which type of breakfast is found in your hotels"><br>

                <div class="btn_box">
                    <button type="button" id="Back4">Prevoius</button>
                    <button type="button" id="Next5" >Next</button>
                </div>
            </div><!--</form>


            <form action="" method="post" id="form6">-->
            <div id="form6">
                    <h3>Do you have parking ?</h3>
                    <input type="radio" name="park" id="" value="Yes, is free"><label for=""  >Yes, is free</label><br>
                    <input type="radio" name="park" id="" value="Yes, is not free"><label for=""  >Yes, is not free</label><br>
                    <input type="radio" name="park" id="" value="No"><label for=""  >No</label>

                    <h3>Do we need to reserved parking ?</h3>
                    <input type="radio" name="respark" id=""><label for=""  >Yes</label><br>
                    <input type="radio" name="respark" id=""><label for=""  >No</label>
                    <input type="text" name="ParkPrice" id="" placeholder = "Price to Reserve a parking" value="<?php echo $Name; ?>">

                    <h3>Which type of parking do you have ?</h3>
                    <input type="radio" name="t_park" id="" value ="Private"><label for="">Private</label><br>
                    <input type="radio" name="t_park" id="" value ="Public"><label for="">Public</label>

                <div class="btn_box">
                    <button type="button" id="Back5">Prevoius</button>
                    <button type="Submit" name="Submit">Add Property</button>
                </div>
            </div>
            
                
        </form>
    </div>


            
    




    <script>
        
        var Form1 = document.getElementById("form1");
        var Form2 = document.getElementById("form2");
        var Form3 = document.getElementById("form3");
        var Form4 = document.getElementById("form4");
        var Form5 = document.getElementById("form5");
        var Form6 = document.getElementById("form6");


        var Next = document.getElementById("Next");
        var Next2 = document.getElementById("Next2");
        var Next3 = document.getElementById("Next3");
        var Next4 = document.getElementById("Next4");
        var Next5 = document.getElementById("Next5");

        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");
        var Back3 = document.getElementById("Back3");
        var Back4 = document.getElementById("Back4");
        var Back5 = document.getElementById("Back5");

        var progress = document.getElementById("progress");
       
        Next.onclick = function(){
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            progress.style.left = "120px"
        }

        Back1.onclick = function(){
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            progress.style.left = "-120px"
        }
        
        Next2.onclick = function(){
            Form2.style.left = "-450px";
            Form3.style.left = "40px";
            progress.style.left = "360px"
        }

        Back2.onclick = function(){
            Form2.style.left = "40px";
            Form3.style.left = "450px";
            progress.style.left = "240px"
        }

        Next3.onclick = function(){
            Form3.style.left = "-450px";
            Form4.style.left = "40px";
            progress.style.left = "360px"
        }

        Back3.onclick = function(){
            Form3.style.left = "40px";
            Form4.style.left = "450px";
            progress.style.left = "240px"
        }

        Next4.onclick = function(){
            Form4.style.left = "-450px";
            Form5.style.left = "40px";
            progress.style.left = "360px"
        }

        Back4.onclick = function(){
            Form4.style.left = "40px";
            Form5.style.left = "450px";
            progress.style.left = "240px"
        }

        Next5.onclick = function(){
            Form5.style.left = "-450px";
            Form6.style.left = "40px";
            progress.style.left = "360px"
        }

        Back5.onclick = function(){
            Form5.style.left = "40px";
            Form6.style.left = "450px";
            progress.style.left = "240px"
        }
    </script>
</body>
</html>