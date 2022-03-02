<?php
include_once './connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$password = password_hash($password, PASSWORD_DEFAULT);

$sql = "insert into `admintable`(name,email,password) values('$name','$email','$password')";
$result = mysqli_query($con,$sql);
if($result){
    echo "data inserted sucessfully";
   
}
else {
    die(mysqli_error($con));
}


?>

