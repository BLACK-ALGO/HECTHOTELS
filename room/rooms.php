<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../propcss/nav.css">
    <link rel="stylesheet" href="../propcss/room.css">
    <title>Document</title>
</head>
<body>

<?php 
    #print_r($_POST);
    $DbHost = "localhost";
        $DbUser = "root";
        $DbPwd = "";
        $DbName = "jih3";
    
        $con = mysqli_connect($DbHost, $DbUser, $DbPwd, $DbName) or die();
        if(isset($_POST['rnumber'])){
           
           $number = $_POST['rnumber'];
           $floor = $_POST['fnumber'];
           $name = $_POST['rname'];
           $copy = $_POST['rcopy'];
           $img = $_POST['roomImg'];

           $host = $_POST['bnumber'];
           $bath = $_POST['bathItem'];
           $extra = $_POST['Facilities'];

            $sql = "INSERT INTO `rooms`(`RomeId`, `Floor`, `Image`) VALUES ('$number','$floor','$img')";
            mysqli_query($con, $sql);
            $sql1 ="INSERT INTO `roomtype`( `NumberOfRoom`, `Price`, `RoomType`, `NumberOfHost`, `ExtraInformation`, `BathroomIterms`)
                     VALUES ('$copy','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')";
            mysqli_query($con, $sql1);
        }
?>
        <?php include("../Property/nav_p.php"); ?>

<div class="container">

        <form action="" method="post" >
            <div id="form1">
                    <h2>Add a room</h2>
                <p>Give all the neccesery information about your rooms</p>
                <input type="number" name="rnumber" id="rnumber" placeholder="Room Number">
                <input type="number" name="fnumber" id="fnumber" placeholder ="Floor Number">
                <input type="text" name="rname" id="rname" placeholder="e.g Double Room, single room">
                <input type="number" name="rcopy" id="rcopy">

                        <div class="article">
                            <h3>Here we come add room to your  hotel</h3>
                            <ul>
                                <li>Give the stander of rach room</li>
                                <li>Gives it facilities  </li>
                                <li>What about the price ?</li>
                                <li>Propose yor guest the room services !!!</li>
                            </ul>
                        </div>

                    <div class="btn_box">
                        <button type="button" id="Next">Next</button>
                    </div>


            </div>
            <!--</form

            
            <form action="" method="post" id="form2">>-->
            <div id="form2">
                    <input type="number" name="bnumber" id="bnumber" placeholder="Maximum number of bed in this room"><br>
                    <textarea name="bathItem" id="" cols="50" rows="10" placeholder="Bathroom items which are present"></textarea><br>
                    <textarea name="Facilities" id="" cols="50" rows="10" placeholder="The available facilities"></textarea>

                        <div class="btn_box">
                            <button type="button" id="Back1">Prevoius</button>
                            <button type="button" id="Next2" >Next</button>
                        </div>
                </div>
            <!--</form>

            <form action="" method="post" id="form3">-->
            <div id="form3">
                        <p>Give discription of the room and all the other features it has</p>
                        <p>The facilities your offer in each to make your guest feel confortable</p>

                        
                        <input type="number" name="rprice" id="rprice" placeholder="Price per night(XAF)">
                        <textarea  name="ritems"  cols="50" rows="10" placeholder="Extra room features" > </textarea><br>
                        <label for="" id="label">Room Images</label><input type="file" name="roomImg" id="">
                        <select name="roomstand" id="" placeholder ="Room Stander">
                            <option value="Single Room">Single Room</option>
                            <option value="Double Room">Double Room</option>
                            <option value="Triple Room">Triple Room</option>
                            <option value="Quad Room">Quad Room</option>
                            <option value="Queen Room">Queen Room</option>
                            <option value="King Room">King Room</option>
                            <option value="Twin Room">Twin Room</option>
                            <option value="Double Room">Double Room</option>
                            <option value="Studio Room">Studio Room</option>
                            <option value="Master Suite">Master Suite</option>
                            <option value="Mini Suite">Mini Suite</option>
                            
                        </select>
                            

                            <div class="btn_box">
                                <button type="button" id="Back2">Prevoius</button>
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

        var Next = document.getElementById("Next");
        var Next2 = document.getElementById("Next2");
        var Next3 = document.getElementById("Next3");
        var Next4 = document.getElementById("Next4");

        var Back1 = document.getElementById("Back1");
        var Back2 = document.getElementById("Back2");
        var Back3 = document.getElementById("Back3");
        var Back4 = document.getElementById("Back4");

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
    </script>
</body>
</html>
</body>
</html>