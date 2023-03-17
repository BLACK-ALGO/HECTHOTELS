<?php 
    $DbHost = "localhost";
    $DbUser = "root";
    $DbPwd = "";
    $DbName = "jih3";

    $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();

    if( isset($_POST['fname']) ){
        
        $Email = $_POST['email'];
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                $error ="Invalid Email";
        }

        $sql = mysqli_query($con, "SELECT * FROM `user`  WHERE Email= '".$_POST['email']."' and Password ='".$_POST['pnum']."'");
        $row = mysqli_fetch_array($sql);
        if(is_array($row)){
            $_SESSION["FName"] = $row['FName'];
            $_SESSION["LName"] = $row['LName'];
            $_SESSION["Email"] = $row['Email'];
            $_SESSION["PhoneNumber"] = $row['PhoneNumber'];
            $_SESSION["Password"] = $row['Password'];
           # $_SESSION["FName"] = $row['email'];
           header("location: sigin.php");
           echo"not";
           
        }else {

    
            $Fname= $_POST['fname'];
            $lname = $_POST['lname'];
            #$Email = $_POST['email'];
            $number = $_POST['pnum'];
            $pwd = $_POST['pwd'];
    


        $sql = "INSERT INTO `user`(`FName`, `LName`, `Email`, `PhoneNumber`, `Password`)
                             VALUES ('$Fname','$lname',' $Email ','$number','$pwd')";
                             
       # $result = mysqli_query($con, "SELECT * FROM `user`  WHERE Email = '".$_POST['email']."' ");
        #$check = mysqli_query($con,"select * from clients where firstname='$Fname' and lastname='$Email'");
        #$rowSelect = mysqli_num_rows($result);

        /*if($check>0){
            echo "customer exists";
            
        }else{
           */ 
     
        
         header("location: home.php?status=success");
        echo"good";
        mysqli_query($con, $sql);
        }
    }
    
    
    ?>