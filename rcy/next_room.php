<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="../indexCss/room.css">
    <link rel="stylesheet" href="../propcss/nav.css">
    <title>Document</title>
</head>
<body>
<?php include("../Property/nav_p.php"); ?>
    <div class="content">
        <form action="" method="post">
            <p>Give discription of the room and all the other features it has</p>
            <label for="" id="label">Maximum number of bed in this room</label><input type="number" name="bnumber" id="bnumber"><br>
            <label for="" id="label">Bathroom items which are present</label><input type="text" name="bitems" id="bitems"><br>
            <label for="" id="label">The available facilities </label> <input type="text" name="rfacilities" id="rfacilities" placeholder="e.g flatTv, Air condition"><br>
            <label for="" id="label">Price per night(XAF)</label><input type="number" name="rprice" id="rprice"><br>
            <label for="" id="label">Extra room features</label><br><textarea  name="ritems"  cols="30" rows="10" placeholder="fehfhfdkf" > </textarea><br>
            <label for="" id="label">Room Images</label><input type="image" src="" alt=""><br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>