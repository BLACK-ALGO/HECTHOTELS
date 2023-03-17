<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../indexCss/room.css">
    <link rel="stylesheet" href="../propcss/nav.css">
    <title>Document</title>
</head>
<body>
<?php include("../Property/nav_p.php"); ?>
    <div class="content">
        <form action="" method="post">
            <h2>Add a room</h2>
            <p>Give all the neccesery information about your rooms</p>
            <label for="" id="label">Room number</label><input type="number" name="rnumber" id="rnumber"><br>
            <label for="" id="label">Floor Number</label><input type="number" name="fnumber" id="fnumber"><br>
            <label for="" id="label">Room name</label><input type="text" name="rname" id="rname" placeholder="e.g Double Room, single room"><br>
            <label for="" id="label">Number of example of this room </label><input type="number" name="rcopy" id="rcopy"><br><br>
            <button type="submit" ><a href="next_room.php">Next</a></button>
        </form>
    </div>
</body>
</html>