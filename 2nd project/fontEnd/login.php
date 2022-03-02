<?php
 include '../backend/connect.php';

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if($email =="admin@gmail.com" && $password =="123"){
    header("location:dashboard.php");
  }
  
  if(!empty($email) && !empty($password)){
    $sql = "SELECT * FROM admintable WHERE email='$email'";
   $result = mysqli_query($con,$sql);
   $mysqli_rows = mysqli_num_rows($result);

  /*  echo($mysqli_rows);*/
   
  if($mysqli_rows>0){
    $row = mysqli_fetch_assoc($result);
    $verify = password_verify($password, $row['password']);
    $status = $row['status'];
    /*echo 'coming '.$status.'';*/
    if($status==1){
      echo "You are blocked by the admin";
    }

   else if($verify==1){
      echo "sucess";
      header("Location:userdashboard.php ");
    }
    else{
      echo("wrong one");
      die(mysqli_error($con));
    }
  }
  
  }
  else {
    echo "wrong";
  }
  
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  <div class="container mt-5">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" >
    
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword">
      </div>
      <button type="submit" class="btn btn-primary" name='submit' id="logIn">Log In</button>
    </form>
  </div>
  <script src="./login.js" ></script>
</body>
</html>