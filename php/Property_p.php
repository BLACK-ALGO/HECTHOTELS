<?php 
              $DbHost = "localhost";
              $DbUser = "root";
              $DbPwd = "";
              $DbName = "hecthotels";
              $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();
              
              
             $errors = array();

    if( isset($_POST['Submit']) and isset($_POST['pname']) and isset($_POST['breakType'])){
        print_r($_POST);

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
        echo $reservationPark;
        echo "This values".$park.",".$reservationPark.",".$typeOfPark.",".$Price;
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

                     $sql ="INSERT INTO `hotels`(`Name`, `Location`, `ServiceNumber`, `FrontView`, `PostCode`, `City`, `Country`, `Street`, `Stander`, `GuestFacilities`)
                                        VALUES ('$propName','[value-2]','$propertyNumber','$new_img_name','$Pcode','$city','$country','$street','[value-9]','$chk')";
                 

                                
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