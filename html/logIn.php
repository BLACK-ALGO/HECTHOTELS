<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../indexCss/nav.css">
    <link rel="stylesheet" href="../indexCss/logcss.css">
    <link rel="stylesheet" href="../indexCss/index.css">
    <title>LogIn</title>
</head>
<body>

<?php 
        $DbHost = "localhost";
        $DbUser = "root";
        $DbPwd = "";
        $DbName = "jih3";
        $error = array();

        $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();

    #session_start();

    if(isset($_POST['Username'])){
        $user = $_POST['Username'];
        $pwd =  $_POST['Password'];

        if (empty($user) ) {
            $error['passwrd'] = "please fill the empty fields";
        }else {
        $sql = mysqli_query($con, "SELECT * FROM `user`  WHERE Email= '$user'");
           # echo "SELECT * FROM `user`  WHERE Email= '$user'"; exit;
           if (mysqli_num_rows($sql) > 0){
               $row = mysqli_fetch_assoc($sql);
               $verify = password_verify($pwd, $row['Password']);
               
                    if ($verify == 1){
                        #$_SESSION['IS_LOGIN'] = true;
                        header("location:home.php");
                    }else{
                        $error['check'] = "Please enter the correct Password";
                        
                    }
                   # header("location: home.php");
            
            }else{
           
                    $error['Email'] = "Please Enter the correct Email";
                }

       }
    }

    ?>
    <?php include("nav.php"); ?>
    <div class="content">
            <form action="" method="post" id="logi">
                        <img src="../img/profile.PNG" width="100px" id="imgs"><br>
                       <span class="error_text"> <?php if (isset($error['Email'])) echo $error['Email']; ?></span><br>
                       <span class="error_txt"> <?php if (isset($error['passwrd'])) echo $error['passwrd']; ?></span><br>
                        <label for="text" id="label">Email</label><br><input type="text" name="Username" placeholder="Enter Email" ><br>
                        <span class="error_txt"> <?php if (isset($error['check'])) echo $error['check']; ?></span><br>
                        <label for="text" id="label">Password</label><br><input type="password" name="Password" placeholder="Enter Password" require="require"><br>
                        <div id="reset"><a href=""><p>Forgot Password</p></a></div>
                <button type="submit" id="signin">LogIn</button><br>
                <button id="signin" name="Save"><a href="sigin.php">SingIn</a></button>
            </form>
    </div>
     <!--footer-->
     <?php include("footer.php"); ?>
     
</body>
</html>