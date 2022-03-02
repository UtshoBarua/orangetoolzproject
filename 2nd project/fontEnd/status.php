<?php
    include "../backend/connect.php";
    $id = $_GET['id'];
    $status = $_GET['status'];
   
    if($status==1){
        $sql = "UPDATE `admintable` SET status=0 WHERE id=$id";
        header("location: dashboard.php ");
      
    }
    if($status==0){
        $sql = "UPDATE `admintable` SET status=1 WHERE id=$id";
        header("location: dashboard.php ");
      
    }

   

    $result = mysqli_query($con,$sql);
    echo ("hello sudir vai");

   
?>