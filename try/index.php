<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <title>Document</title>
</head>
<body>
    <!--navbar-->
    <div class="nav_bar">
        <div class="logo">HECT<span>HOTELS</span></div>
        <ul>
            <li><a href="Settings">Settings</a>
                
                    <ul>
                        <li><a href="">Become a Partner</a></li>
                        <li><a href="">Language</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                
            </li>
            <li><a href="">Sign in</a></li>
        </ul>
    </div>
    
    <!--Body-->
    <div class="searchbar">
        <div class="quary">
            <button id="Quary">Less Expensive</button>
            <button id="Quary">Stander</button>
            <button id="Quary">Location</button>
        </div>
        <div class="bar">
             <input type="search" name="search" id="" placeholder="Enter name of a hotel" >
        </div>
    </div>
    <div class="main_body">
        
        <div class="sections  book">
                <img src="../img/bed.png" alt="" s>
        </div>
        <div class="sections article">
                <img src="../img/bed.png" alt="" s>
        </div>
    </div>
</body>
</html>



<?php 

//COMPARING     
try {
    $stm = $conj -> prepare()
    $stm -> execute()
    $result = $stm-> fetcAll()
    if(count($result )){
        foreach ($result as $row) {
            # code...
        }
    }else{
        //erroe
        exit;
    }
} catch (Exception $e) {
    //throw $th;
    echo
}
?>