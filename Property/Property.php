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
              $DbHost = "localhost";
              $DbUser = "root";
              $DbPwd = "";
              $DbName = "jih3";
              $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();
              
             # print_r($_POST);
    if(isset($_POST['Submit'])){

        $checkbox = $_POST['guest'];
        $chck = " ";
        foreach($checkbox as $chck1){
            $chck .= $chck1.",";
        }

        $country = $_POST['Country'];
        $street = $_POST['Sname'];
        $propertyNumber = $_POST['pnum'];
        $Pcode = $_POST['Pcode'];
        $city =  $_POST['city'];
        $propName = $_POST['pname'];
        $error = array();


      /*  $fileDir="uploads/";
        $allowtype = array('jpg', 'png', 'jpeg', 'gif');
        $fileNmae = array_filter($_FILES['roomImg']['name']);
        if (!empty($fileNmae as $key => $val)) {
            $fileNmae = basename($_FILES['roomImg']['name']['$key']);
            $TargetFilePath = $fileDir.$fileNmae;

            #checking file validity
            $filetype = pathinfo($TargetFilePath, PATHINFO_EXTENSION);
            if(in_array($filetype, $allowtype)){
                if(move_uploaded_file($_FILES['roomImg']['name']['$key'], $fileDir)){
                    $insertValueSql .="("'. $fileName .'", Now())" ;
                }else{
                    $erroruploading  .= $_FILES['roomImg']['name']['$key'].' | ';
                }
            }else{
                $erroruploadType .= $_FILES['roomImg']['name']['$key'].' | ';
            }

            #errormsg
            

        }*/
        $sql ="INSERT INTO `hotels`(`Name`, `Location`, `ServiceNumber`, `Category`,
         `FrontView`, `PostCode`, `City`, `Country`, `Street`, `Stander`, `GuestFacilities`)
         VALUES ('$propName','255','$propertyNumber','200','hello',
         '$Pcode','$city','$country','$street','82222','$chck')";

        mysqli_query($con, $sql);
        
        #for the parkin table
            $park = $_POST['park'];
            $reservationPark = $_POST['respark'];
            $typeOfPark = $_POST['t_park'];
            $Price = $_POST['ParkPrice'];

            $sql2 = "INSERT INTO `parkimg`(`ParkingType`, `FreeParking`, `Public`, `Private`, `ParkingPrice`, `Reservation`) 
            VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
            mysqli_query($con, $sql2);

        #for break fast
        $Tbreak = $_POST['breakType'];
        $break = $_POST['breakfas'];
        $sql3 = "INSERT INTO `breakfast`(`BreakfastType`, `Location`, `Price`)
         VALUES ('[value-1]','[value-2]','[value-3]')";
         mysqli_query($con, $sql3);



    }
    ?>

   
    <div class="container">

        <form action="Property.php" method="post" >
            <div id="form1">

            


                <h3>Give hotel location</h3>
        
                <input type="text" name="Country" id="" placeholder="Country">
                <input type="text" name="Sname" id="sname" placeholder="Street name">
                <input type="tel" name="pnum" id="pnum" placeholder="Property Phone number">
                <input type="text" name="Pcode" id="Pcode" placeholder="Post Code">
                <input type="text" name="city" id="city" placeholder="City"> 
                


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
                    
                    <input type="text" name="pname" id="pname" placeholder="Enter your property name">
                    <label for="" id="label">Property Images</label><input type="file" name="roomImg[]" id="" multiple>
                    
                
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
                        <input type="radio" name="" id="Breakfas" value="No, is payed apart"><label >No, is payed apart</label><br>
                        <input type="text" name="BreakPrice" id="" placeholder="Price for break fast">
                        <h3>List the type of breakfast you offer in your hotel</h3>
                        <input type="text" name="breakType" id="breakType" placeholder="Which type of breakfast is found in your hotels"><br>

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
                    <input type="text" name="ParkPrice" id="" placeholder = "Price to Reserve a parking">

                    <h3>Which type of parking do you have ?</h3>
                    <input type="radio" name="t_park" id="" value ="Private"><label for="">Private</label><br>
                    <input type="radio" name="t_park" id="" value ="Public"><label for="">Public</label>

                <div class="btn_box">
                    <button type="button" id="Back5">Prevoius</button>
                    <button type="Submit">ADD</button>
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