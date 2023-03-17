
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../indexCss/css.css">
    <link rel="stylesheet" href="../indexCss/nav.css">
    <link rel="stylesheet" href="../indexCss/index.css">
    <title>Document</title>
</head>
<body>


    <?php 

       
        $Dbhost ="localhost";
        $DbUser = "root";
        $Dbpwd = "";
        $DbName = "jih3";

        
        $con = mysqli_connect($Dbhost, $DbUser, $Dbpwd, $DbName) or die();


        
        if(isset($_POST['email'])){

            $email = $_POST['email']; ;
            $Fname =  $_POST['fname'];
            $Lname =  $_POST['lname'];
            $Pwds =  $_POST['phone'];
            $Number =  $_POST['pwd'];
            $error = array();
            if (empty($email) or empty($Fname) or empty($Lname) or empty($Pwds) or empty($Number)) {
                $error['user'] = 'Please fill the empty fields';
            }else {

            $query ="INSERT INTO `admin`(`Email`, `FirstName`, `LastName`, `Password`, `PhoneNumber`)
                         VALUES ('$email','$Fname','$Lname','$Pwds','$Number')";

                mysqli_query($con ,$query) or die("error on add your account");
            }    
              
        }

       # header("loation: home.php");

    ?>

    <div class="container">
        
            <form action="partners.php" method="post" >
               
            <DIV id="form1">

                <div class="text">
                    <p>Become a partner and let the world know your hotels and get a quick access to the market with</p>
                    <h4>HECTHOTELS</h4>
                </div>
                <span class="error"><?php if (isset($error['user'])) echo $error['user']; ?></span> <br>
                <label for="" id="label">Enter Email</label><br> &nbsp;&nbsp;<input type="email" name="email" id="email" placeholder="example@gmail.com"><br>
                        <input type="hidden" name="form_1" value="form1">
                    <div class="btn_box">
                        <button type="button" id="Next" name="next">Next</button>
                    </div>
            </DIV><!--</form>

            <form action="partners.php" method="post" id="form2">-->
            <DIV id="form2">
                <input type="text" name="fname" id="fname" placeholder="First Name">
                <input type="text" name="lname" id="lname" placeholder="Last Name">
                <input type="tel" name="phone" id="" placeholder="Mobile Number">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
                <input type="password" name="cpwd" id="cpwd" placeholder="Retype Password">

                <input type="hidden" name="form_2" value="form2">

                <div class="btn_box">
                    <button type="button" id="Back1">Prevoius</button>
                    <button type="Submit">Sign In</button>
                </div>
            </DIV>
            </form>

            


  


</div>

<?php include("footer.php");?>

<!---script-->

    <script>
        var Form1 = document.getElementById("form1");
        var Form2 = document.getElementById("form2");
        var Form3 = document.getElementById("form3");

        var Next = document.getElementById("Next");
        var Next2 = document.getElementById("Next2");
        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");

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
    </script>

</body>
</html>