<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---for nav, index and footer-->
    <link rel="stylesheet" href="indexCss/nav.css">
    <!---for the landing page--->
    <link rel="stylesheet" href="indexCss/index.css">
    <!---for the signin form form--->
    <link rel="stylesheet" href="">
    <!---for the partener form--->
    
    <title>Document</title>
</head>
<body>
    <?php include "Core/nav.php"; ?>
    <!--navbar-->
    <?php
        
        
        if (empty($_GET['mun'])) {
           # echo "<link rel='stylesheet' href='indexCss/css.css'>";
            include  "html/landing.php";

        }
        else if( $_GET['mnu'] == 'sign'){
            echo "<link rel='stylesheet' href='indexCss/siging.css'>";
            include "html/sigin.php";
        }
        else if( $_GET['mnu'] == 'partner'){
            echo "<link rel='stylesheet' href='indexCss/css.css'>";
            include "html/partners.php";
        }
        else if( $_GET['mnu'] == 'login'){
            echo "<link rel='stylesheet' href='indexCss/logcss.css'>";
            include "html/logIn.php";
        }
        else if( $_GET['mnu'] == 'about'){
           # echo "<link rel='stylesheet' href='indexCss/css.css'>";
            include "html/sigin.php";
        }
        else if( $_GET['mnu'] == 'faq'){
            
           # include "html/sigin.php";
        }


    ?>
    
    <!--Body-->



    <?php include("Core/footer.php") ?>
</body>
</html>