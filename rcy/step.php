<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css links -->
    <link rel="stylesheet" href="../propcss/nav.css">
    <link rel="stylesheet" href="../propcss/step.css">
    <title>Document</title>
</head>
<body>
    <?php include("nav_p.php"); ?>
    <div class="main">
        <h3>Give the location of your hotel</h3>
        <form action="" method="post">
            <label for="" id="label">Country</label><br> &nbsp;&nbsp;&nbsp; <input type="text" name="" id=""><br>
            <label for="" id="label">Street name</label><br>&nbsp;&nbsp;&nbsp; <input type="text" name="Sname" id="sname"><br>
            <label for="" id="label"> Property number</label><br>&nbsp;&nbsp;&nbsp; <input type="number" name="hnum" id="hnum"><br>
            <label for="" id="label">Post Code</label><br>&nbsp;&nbsp;&nbsp; <input type="text" name="Pcode" id="Pcode"><br>
            <label for="" id="label">City</label><br>&nbsp;&nbsp;&nbsp; <input type="text" name="city" id="city"><br>
            <button id="cont1"><a href=""><</a></button> <button id="cont"><a href="step2.php">Continue</a></button>

        </form>
    </div>
        <div class="article">
            <h3>During the form filling what you should consider</h3>
            <ul>
                <li>Spell your street name correctly</li>
                <li>Provide the post/Zip code </li>
                <li>Use the physical property of the property</li>
                <li>Please fill all fields</li>
            </ul>
        </div>
   
</body>
</html>