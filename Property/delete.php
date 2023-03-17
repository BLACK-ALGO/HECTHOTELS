<?php 
include "../Core/connect.php";

if(isset($_GET['deleteid']) ){
    echo $_GET['deleteid'];
    $name = $_GET['deleteid'];

    $sql = "DELETE FROM `hotels` WHERE Name = '$name';";
    $result = mysqli_query($con , $sql);
    if($result){
        echo "good";
        header("location: display.php");
    }else{
        die(mysqli_error($con));
    }

}
?>