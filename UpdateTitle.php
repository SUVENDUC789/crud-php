<?php
include 'dbconnect.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $sl=$_POST['sl'];
    $title=$_POST['title'];

    $sql="UPDATE `topic` SET `title` = '$title' WHERE `topic`.`sl` = $sl";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        header("location:index.php");
    }

}



?>