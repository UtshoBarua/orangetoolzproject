<?php
include '../backend/userconnect.php';
$process = $_GET['process'];
$result = $process;
$process = $process/100;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Group Name</th>
      <th scope="col">Total</th>
      <th scope="col">Show</th>
    
    </tr>
  </thead>
  <tbody>
   
      <?php

      $i;
   
    for($i=1; $i<=$process; $i++){
        echo '<tr>';
        echo'  <td> Sample_'.$i.'</td>';
        echo'  <td> 100</td>';
        echo'  <td> <button class="btn btn-primary">  <a href="./uploadDashboard.php" class="text-light"> Show </a></button>  </td>';
        echo '</tr>';
        
    }
    
    $result = $result%100;
    
    if($process%100!=0 && $result>0){
        
        echo '<tr>';
        echo'  <td> Sample_'.$i.'</td>';
        echo'  <td>'.$result.' </td>';
         echo'  <td> <button class="btn btn-primary">  <a href="./uploadDashboard.php" class="text-light"> Show </a></button>  </td>';
        echo '</tr>';
    }

 
   

?>
   
    
   
  </tbody>
</table>
    </div>
</body>
</html>