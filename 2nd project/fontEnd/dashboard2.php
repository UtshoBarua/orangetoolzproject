<?php
    include '../backend/userconnect.php';
    $sql = "SELECT * FROM `usertable` WHERE length(number)=1";
    $result = mysqli_query($con,$sql);
  
    $row = mysqli_num_rows($result);

    echo($row);

 

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
              <a class="navbar-brand">Dashboard/Data Show</a>
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button" id="upload" >File Upload</button></li>
                  <li><button class="dropdown-item" type="button">File & Group Info</button></li>
                  <li><button class="dropdown-item" type="button" id="logout" >Log Out</button></li>
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
            
                <th scope="col">File Name</th>
                <th scope="col">Total Uploaded</th>
                <th scope="col">Total Process</th>
                <th scope="col">Group</th>
               
              </tr>
            </thead>
            <tbody>
              <tr>
              
                <td>Mark</td>
                <td>200</td>
                <td>110</td>
                <td> <button class="btn btn-info">Group</button> </td>
             
              </tr>
              <tr>
               
                <td>Jacob</td>
                <td>300</td>
                <td>100</td>
                <td> <button class="btn btn-info">Group</button> </td>
                
              </tr>
            
            </tbody>
          </table>
    </div>

    </div>


  <script src="./dashboard2.js"></script>
    
</body>
</html>