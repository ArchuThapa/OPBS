<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="assets/css/manageuser.css">
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

<?php
include 'config.php';

?>


<div class="container">
    <button class="btn btn-primary my-5"><a href="admin-add-user.php" class="text-light">Add User</a>

</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">LicenceNo</th>
      <th scope="col">VehicleNo</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>


    </tr>
  </thead>
  <tbody>


  <?php

$sql="select * from register_user";
$result=mysqli_query($conn, $sql);


if($result){
   while($row=mysqli_fetch_assoc($result)) {
$id=$row['id'];
$uname=$row['uname'];
$ulicenceno=$row['ulicenceno'];
$uvehicleno=$row['uvehicleno'];
$uemail=$row['uemail'];
$ucontact=$row['ucontact'];
$upwd=$row['upwd'];
echo '<tr>

<td>'.$id.'</td>
 <td>'.$uname.'</td>
 <td>'.$ulicenceno.'</td>
 <td>'.$uvehicleno.'</td>
<td>'.$uemail.'</td>
<td>'.$ucontact.'</td>
<td>'.$upwd.'</td>

   
<td>
  <button class="btn btn-primary" ><a href="admin-manage1-user.php? updateid='.$id.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="admin-manage2-user.php? deleteid='.$id.'" class="text-light">Delete</a></button>

</td>
 </tr>';

   }
  

}

?>




  
  </tbody>
</table>
</div>




</div>

</body>
</html>