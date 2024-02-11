<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="assets/css/adduser.css">
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

if(isset($_POST['submit'])){
    $uname = $_POST["uname"];
    $ulicenceno = $_POST["ulicenceno"];
    $uvehicleno = $_POST["uvehicleno"];
    $uemail = $_POST["uemail"];
    $ucontact = $_POST["ucontact"];
    $upwd= $_POST["upwd"];

 
    $sql="insert into register_user(uname, ulicenceno, uvehicleno, uemail, ucontact, upwd) values('$uname', '$ulicenceno', '$uvehicleno','$uemail', '$ucontact', '$upwd')";
  $result=mysqli_query($conn, $sql);
  if ($result) {
    // echo " data inserted successfullly";
    header('location:admin-manage-user.php');
}

else{
    die(mysqli_error($conn));
}
}

?>



<div class="container my-5">
    <form method="post">

    <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="uname"  autocomplete="off">
</div>
<div class="mb-3">
    <label>Licence No.</label>
    <input type="text" class="form-control" placeholder="Enter your licence no." name="ulicenceno"  autocomplete="off">
</div>


<div class="mb-3">
    <label>Vehicle No.</label>
    <input type="text" class="form-control" placeholder="Enter your vehicle no." name="uvehicleno"  autocomplete="off">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="text" class="form-control" placeholder="Enter your email " name="uemail" autocomplete="off">
</div>
<div class="mb-3">
    <label>Contact</label>
    <input type="text" class="form-control" placeholder="Enter your contact " name="ucontact" autocomplete="off">
</div>
<div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder="Enter your password " name="upwd" autocomplete="off">
</div>
   
  <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
</form>
        
    </div>
   
  




</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>





</body>
</html>