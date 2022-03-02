<?php
    include "../backend/connect.php";
    $id = $_GET['updateid'];
    print_r($id);
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       

        $sql = "update `admintable` set id=$id,name='$name',email= '$email',password='$password' where id=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "data updated";
            header("Location:dashboard.php");
        }
        else {
            die(mysqli_error($con));
        }

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Update Account</h3>
        <form method="post">
            <div class="mb-3">
                <label  class="form-label">First Name</label>
                <input type="name" name="name" class="form-control" id="name">
             
              </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name ="email">
           
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" id="register" name="submit">Update</button>
          </form>
    </div>
  <script src="./update.js" ></script>
</body>
</html>
