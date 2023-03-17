<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css links -->
    <link rel="stylesheet" href="../propcss/nav.css">
    <link rel="stylesheet" href="../propcss/step4.css">
</head>
<body>
    <?php include("nav_p.php"); ?>
    
    <div class="main">
    <h3>What can your guest enjoy as facilities ?</h3>
        <form action="" method="post">
            <input type="checkbox" name="" id=""><label for="">Bar</label><br>
            <input type="checkbox" name="" id=""><label for="">Garden</label><br>
            <input type="checkbox" name="" id=""><label for="">Terrace</label><br>
            <input type="checkbox" name="" id=""><label for="">Air condition</label><br>
            <input type="checkbox" name="" id=""><label for="">Free wifi</label><br>
            <input type="checkbox" name="" id=""><label for="">Heating</label><br>
            <input type="checkbox" name="" id=""><label for="">Swimming pool</label><br>

            <h3>Are breakfast serve to guest ?</h3>
            <input type="checkbox" name="" id=""><label for="">Yes</label><br>
            <input type="checkbox" name="" id=""><label for="">No</label><br>
            <label for="" id="label">breakfast cost per day/per person</label><br><input type="text" name="" id=""  placeholder="breakfast cost per day/per person"><br>

            <h3>Is breakfast free ?</h3>
            <input type="checkbox" name="" id=""><label for="">Yes, it's included</label><br>
            <input type="checkbox" name="" id=""><label for="">No, is payed apart</label><br>

            <h3>List the type of breakfast you offer in your hotel</h3>
            <label for="" id="label">Which type of breakfast is found in your hotels</label><br><input type="text" name="" id="" ><br>

            <h3>Do you have parking ?</h3>
            <input type="checkbox" name="" id=""><label for="">Yes, is free</label><br>
            <input type="checkbox" name="" id=""><label for="">Yes, is not free</label><br>
            <input type="checkbox" name="" id=""><label for="">No</label><br>

            <h3>Do we need to reserved parking ?</h3>
            <input type="checkbox" name="" id=""><label for="">Yes</label><br>
            <input type="checkbox" name="" id=""><label for="">No</label><br>

            <h3>Which type of parking do you have ?</h3>
            <input type="checkbox" name="" id=""><label for="">Private</label><br>
            <input type="checkbox" name="" id=""><label for="">Public</label><br>
            <button id="cont1"><a href=""><</a></button> <button id="cont"><a href="step2.php">Continue</a></button>

           

        </form>
    </div>
</body>
</html>