<?php

include 'connect.php';
if(isset($_GET['deleteteid'])){
    $id=$_GET['deleteteid'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:read.php');

    }else{
        die(mysqli_error($con));
    }
}

?>