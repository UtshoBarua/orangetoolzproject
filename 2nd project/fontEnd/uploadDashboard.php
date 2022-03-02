


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UploadFile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
    
    <table class="table">
  <thead>
  
  <tr>
      <th scope="col">Number</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
     
  <?php
    include '../backend/userconnect.php';
    $sql = "SELECT * FROM `usertable` WHERE length(number)=10 ";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $number = $row['number'];
        $name= $row['name'];
        $address= $row['address'];
        $email= $row['email'];
        $gender= $row['gender'];
        $status =$row['status'];
        $date  = $row['date'];
        
        echo'
        <tr>
        <th scope="row">'.$number.'</th>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$email.'</td>
        <td>'.$gender.'</td>
        <td>'.$status.'</td>
        <td>'.$date.'</td>
     
      </tr>
        ';


    }




?>





  
  </tbody>
</table>
    </div>
    
</body>
</html>