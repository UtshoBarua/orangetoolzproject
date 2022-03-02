




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">File Name</th>
      <th scope="col">Total Uploaded</th>
      <th scope="col">Total Process</th>
      <th scope="col">Group</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    include '../backend/userconnect.php';
    
    $sql = "SELECT * FROM `uploadfile`";
    $sql2 = "SELECT * FROM `usertable`";
    
    $result = mysqli_query($con,$sql);
    $result2 = mysqli_query($con,$sql2);
   
   

 
    

    while( $row = mysqli_fetch_assoc($result)){
       
        $name = $row['file'];
        $uid =  $row['id'];
         
        while($row2 = mysqli_fetch_assoc($result2)){
            
            
            $upload = "SELECT * FROM `usertable` where uid= $uid ";
            $process ="SELECT * FROM `usertable` WHERE length(number)=10 and uid=$uid "; 
            $rupload = mysqli_query($con,$upload);
            $rprocess = mysqli_query($con,$process);
            $cupload = mysqli_num_rows($rupload);
            $cprocess = mysqli_num_rows($rprocess);
            

        };
            
    
            echo '<tr>
            <th scope="row">'.$name.'</th>
            <td>'.$cupload.'</td>
            <td>'.$cprocess.'</td>
            <td><button class="btn btn-primary"> <a href="../fontEnd/bloc.php?process='.$cprocess.'" class="text-light"> Show Group <a> </button> </td>
           
          </tr>';
        
       
    }

    ?>
     <td><button class="btn btn-primary"> <a href="./fileupload.php" class="text-light"> Upload File <a> </button> </td>

   
  </tbody>
</table>
</div>
</body>
</html>