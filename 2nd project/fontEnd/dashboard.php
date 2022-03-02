<?php
  include "../backend/connect.php";
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <nav class="navbar">
            <div class="container-fluid">
              <a class="navbar-brand">Dashboard/Userlist</a>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" id="userList"  type="button">User List</button></li>
                  <li><button class="dropdown-item" id="register" type="button">Register</button></li>
                  <li><button class="dropdown-item" id="logout" type="button">Log Out</button></li>
                </ul>
              </div>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </div>
    
    <div class="container">
        <table class="table">
            <thead>
              <tr>
            
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $sql = "Select * from `admintable`";
                $result = mysqli_query($con,$sql);
                if($result){
                 while($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $name = $row['name'];
                  $email = $row['email'];
                  $password = $row['password'];
                  $status = $row['status'];
               
                
               echo  ' <tr>';
            
             echo '<td>'.$name.'</td>';
             echo '<td>'.$email.'</td>';
         
           if($status==0){
            $setstatus = 'Active';
      
           }
          else if($status==1){
            $setstatus = 'Block';
          }
          else if($status==3){
            $setstatus = 'Nothing To Do';
          }

          
         
           echo '<td><p> <button class="btn btn-primary">  <a href="status.php?id='.$id.'&status='.$status.'" class="text-light">'.$setstatus.'</a> </button></p></td>';
            
             echo ' <td> <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light" >Edit</a> </button></td>';
             echo '<td> <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light"> Delete </a></button></td>';
            

           echo '</tr>';
                  
                  
                 }
                    

                }
              ?>
              
      
              
              
   
            </tbody>
          </table>
    </div>

    </div>


  <script src="./dashboard.js"></script>
    
</body>
</html>