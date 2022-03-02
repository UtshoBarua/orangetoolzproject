<?php
    include "../backend/connect.php";
    $id=$_GET['deleteid'];
    
    $sql = "delete from `admintable` where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "data delete sucessfully";
        header("location: dashboard.php");
    }
    else {
        die(mysqli_error($con));
    }

?>