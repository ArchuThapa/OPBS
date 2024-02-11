<?php
// include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="assets/css/viewuser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

 <!-- ====== ionicons ======= -->
                <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<!-- =============== Navigation ================ -->
<div class="container1">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="car-sport-outline"></ion-icon>
                        </span>
                        <span class="title">OPBS ADMIN</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>

                    <a href="index1.html">
                <li>

                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Users</span>

                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="location"></ion-icon>
                        </span>
                        <span class="title">Slots</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="bookmarks"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </a>
                </li>




                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="key"></ion-icon>
                        </span>
                        <span class="title">Password Resets</span>

                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
                <li>
                </li>

            </ul>

        </div>
</div>





<div class="main">






<div class="container">
   <h1>Register User</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Licence No</th>
      <th scope="col">Vehicle No</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      


    </tr>
  </thead>
  <tbody>


  <?php
            $servername="localhost";
            $username="root";
            $password="";
            $database="opbs";
            // Create connection
            $conn = mysqli_connect($servername,$username,"",$database);
            //check connection
            if($conn->connect_error){
                die("connection failed:".$conn->connect_error);
            }
// read all row from database table
$sql ="SELECT * FROM register_user";
$result=$conn->query($sql);

  if(!$result){
                die("Invalid query:".$conn->error);
            }

while($row = $result->fetch_assoc()){
       echo "<tr>
                <td> ".$row["id"] . "</td>
                <td>" .$row["uname"] . "</td>
                <td>" .$row["ulicenceno"] ."</td>
                <td>" .$row["uvehicleno"] . "</td>
                <td>" .$row["uemail"]. "</td>
                <td>" .$row["ucontact"]. "</td>
                <td>" .$row["upwd"]. "</td>


                    

    
</tr>";

}

        
?> 
                    




  
  </tbody>
</table>
</div>



     
</body>
</html>