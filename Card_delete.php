<?php

include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='GET')
{
    $id=$_GET['id'];
    
    $sql="DELETE FROM `topic` WHERE `topic`.`sl` = $id";

    $result=mysqli_query($conn,$sql);

    if($result)
    {
        echo "<h1>Please wait ...</h1>";
    }
    else 
    {
        echo "<h1>Something Wrong ...</h1>";
    }

    header("location:index.php");
}


?>