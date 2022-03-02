<?php
  include "../backend/userconnect.php";



  $date = date("Y-m-d H:i:s");
  if(isset($_POST['submit'])){
      
    $filename = $_FILES['file']['tmp_name'];
      $filename2 = $_FILES['file']['name'];
      $name = $_POST['name'];
      $store = 'store/'.$filename2;
      move_uploaded_file($filename,$store);
      $sql = "insert into `uploadfile`(name,file,date) values('$name','$store','$date')";
      $result = mysqli_query($con,$sql);
      if($result){
        echo "sucess";
      }
      else{
        die(mysqli_error($con));
      }
      
      $uidsql = "SELECT id FROM `uploadfile` ORDER BY id DESC LIMIT 1";
      $uresult = mysqli_query($con,$uidsql);
      $urow = mysqli_fetch_assoc($uresult);
      $uid = $urow['id'];
     
      
  



      if($_FILES['file']['size']>0){
       $file = fopen($store,"r");

       while(($column = fgetcsv($file,1000,","))!==False) {
        $sql = "insert into `userTable` (number,name,address,email,gender,status,date,uid) values('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."','".$date."','.$uid.')";
        $result = mysqli_query($con,$sql);
      if(!empty($result)){
         /* echo "data uploaded";*/
         header("location:userDashboard.php");
        }
        else{
          die (mysqli_error($con));
        }
       }

      }

    
     


   
  }
  

?>



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
  <form method="POST" enctype="multipart/form-data">
<label>File name</label> <br>
<input type="text" name="name"> 
  <input type="file" name="file" id="file"> <br>
  <input type="submit" value="Upload File" name="submit">
</form>

  </div>

</body>
</html>