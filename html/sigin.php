<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css links-->
    <link rel="stylesheet" href="../indexCss/nav.css">
    <link rel="stylesheet" href="../indexCss/siging.css">
    <link rel="stylesheet" href="../indexCss/index.css">
    
    <title>signin</title>
</head>
<body>

<?php 
    $DbHost = "localhost";
    $DbUser = "root";
    $DbPwd = "";
    $DbName = "jih3";

    $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();

    if( isset($_POST['fname']) ){

        $Fname= $_POST['fname'];
        $lname = $_POST['lname'];
        #$Email = $_POST['email'];
        $number = $_POST['pnum'];
        $pwd = $_POST['pwd'];
        $Password = password_hash($pwd, PASSWORD_DEFAULT);
        
        $Email = $_POST['email'];
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $error ="Invalid Email";
    }
        

        $error =array();
        $query = "SELECT Email FROM user WHERE Email ='$Email'";
        $check = mysqli_query($con, $query);
        
        

        if (empty($Fname) or empty($lname)){
            $error['user'] ="Names Require";
        }elseif (mysqli_num_rows($check) > 0) {
            $error['user'] ="Exist";
        }

        if (empty($Email)){
            $error['email'] ="Email Require";
        }

        if (empty($number)){
            $error['number'] ="Phone Number Require";
        }

        if (empty($pwd)){
            $error['passwrd'] ="Password Require";
        }
    if (count($error) == 0) {
            if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE Email = '$Email' 
                    OR PhoneNumber='$number' OR FName='$Fname' OR LName ='$lname'")) > 0) {
                $error['userexist']="User already exist";
                }else{
                
                
        
                        $sql = "INSERT INTO `user`(`FName`, `LName`, `Email`, `PhoneNumber`, `Password`)
                        VALUES ('$Fname','$lname','$Email','$number','$Password')";          
                        mysqli_query($con, $sql);
                        header("location: home.php?status=success");
            
                }
    }
}
    
    
    ?>

    
    <div class="content">
        <div class="text">
            <p>Join and get the best services from each hotel and enjoy your day on </p><h4>HECTHOTELS</h4><br>
        </div><br>
        <div>
        <span class="text_error"><p><?php if(isset($error['userexist'])) echo $error['userexist'];  ?></p></span>
        </div>
        <form action="sigin.php" method="post">
            <span class="text_error"><?php if(isset($error['user'])) echo $error['user'];  ?></span><br>
            <label for="" id="label">First Name</label><input type="text" name="fname" id="fname" placeholder="Jih Tangu" ><br>
            <span class="text_error"></span>
            <label for="" id="label">Last Name</label><input type="text" name="lname" id="lname" placeholder="Fabrice" ><br>

            <span class="text_error"><?php if(isset($error['email'])) echo $error['email'];  ?></span><br>
            <label for="" id="label">Email Address</label><input type="email" name="email" id="email" placeholder="example@gmail.com" > <br>

            <span class="text_error"><?php if(isset($error['number'])) echo $error['number'];  ?></span><br>
            <label for="" id="label">Phone Number</label> <input type="text" name="pnum" id="pnum"  placeholder="Enter Your Pnonr Number" > <br>

            <span class="text_error"><?php if(isset($error['passwrd'])) echo $error['passwrd'];  ?></span><br>
            <label for="" id="label">Enter Password</label><input type="password" name="pwd" id="pwd" ><br>          
                    <div class="field">
                    <label for="" id="label">Re-type Password</label> <input onkeyup="active2()" type="password"  name="rpwd" id="rpwd" > <br>
                    <div class="Show">Show</div>
                    </div> 
            <div class="info">
            <p>The Password should be minimum 8 character<br> With atleast an UpperCase Character</p>
            </div>
            <button type="submit" id="join">SingIn</button>
        </form>
    </div>


    <?php include "../js/index.php"; ?>
</body>
</html>