
<?php 
    #print_r($_POST);
        $DbHost = "localhost";
        $DbUser = "root";
        $DbPwd = "";
        $DbName = "hecthotels";
    
        $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();
        if(isset($_POST['submit']) and isset($_POST['rnumber']) and isset($_FILES['RoomImg'])){

            $number = $_POST['rnumber'];
            $floor = $_POST['fnumber'];
            $name = $_POST['roomstand'];
            $copy = $_POST['NumRooms'];
            $NumBed = $_POST['bnumber'];
            $bath = $_POST['bathItem'];
            $extra = $_POST['Facilities'];
            $price = $_POST['rprice'];
            $host = $_POST['Hostnumber'];
            echo "number = ".$number;
            


            $ErrorMag = array();
            
                
            $check = "SELECT * FROM rooms WHERE RomeId";
           $result = mysqli_query($con, $check);
           /* if(mysqli_num_rows($result) > 0){
                echo "error";
            }else{*/

                if(!empty($number) or !empty($name) or !empty($floor)){ 
                
                    $img_name = $_FILES['RoomImg']['name'];
                    $img_size = $_FILES['RoomImg']['size'];
                    $tmp_name = $_FILES['RoomImg']['tmp_name'];
                    $error = $_FILES['RoomImg']['error'];
                            

                            if ($error == 0){
                                if ($img_size > 125000000000000) {
                                    $em = "file size is too big!";
                                   header("Location: rooms.php?$em");
                                }
                                else{
                                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                    echo ($img_ex);
                                    $img_ex_lc = strtolower($img_ex);
                                    $allowed_exts = array("jpg", "jpeg","png");
                                    #if (in_array($img_ex_lc, $allowed_exts )) {
                                        $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                                        $img_upload_path = '../room/uploads/'.$new_img_name;
                                        move_uploaded_file($tmp_name, $img_upload_path);

                                            // insert into database

                                            $sql = "INSERT INTO `rooms`(`RomeId`, `Name`, `Floor`, `Image`, `Price`, `RoomType`, `BathroomItems`, `NumberOfHost`, `Status`, `RoomDiscription`, `Number_Bed`) 
                                                                VALUES ('$number','hotel','$floor','$new_img_name','$price','$name','$bath','$host','[value-9]','$extra','$NumBed')";
                                            
                                         mysqli_query($con, $sql);
                                    /*}
                                    else{
                                        $em ="sorry file not taken into account!";
                                   header("Location: rooms.php?$em");
                                    }*/
                                }
                                }
                                else{
                                    $em = "unkown error occured!";
                                    header("Location: rooms.php?$em");
                                }
                    
                    }
        
           # }

           #ss header("location: ./room/rooms.php");
        }
?>
        