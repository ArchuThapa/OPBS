
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Add</title>
    <link rel="stylesheet" href="assets/css/manageuser.css">
    <link rel="stylesheet" href="assets/css/adduser.css">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    .success {
        color: green;
    }

    .error {
        color: red;
    }
</style>
    </head>

<body>

 <!-- ====== ionicons ======= -->
                <!-- <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
                <script type="module" src=" https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js "></script>
                <script nomodule src=" https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js "></script>


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

                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li> -->

                

                    <!-- <a href="index1.html">
                <li>

                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Users</span>

                    </a>
                </li> -->

                <li>

                    <button onclick="showHideUsers()">
                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Users</span>

                    </button>
              <div class="usersection hide">

                    <a href="admin-view-user.php">View</a>
                    <a href="admin-manage-user.php">Update</a>
                
               </div> 
          </li>


                <li>
                    <button onclick="showHideSlot()">
                        <span class="icon">
                            <ion-icon name="location"></ion-icon>
                        </span>
                        <span class="title">Slots</span>
                    </button>

                    <div class="slotsection hide">
                    <a href="#">Add Slot</a>
                    <a href="admin-add-update.php">Update Slot</a>
                    <a href="admin-add-delete.php">Delete Slot</a>


                   
               </div> 


                </li>



                <li>

<button onclick="showHideBook()">
<span class="icon">
    <ion-icon name="bookmarks-outline"></ion-icon>
</span>
<span class="title">Book</span>

</button>
<div class="booksection hide">

<a href="admin-verifybooking.php">Verify Booking</a>
<a href="admin-cancelbooking.php">Cancel Booking</a>

</div> 
</li>

<!-- 
                <li>
                    <button onclick="showHideSlot()">
                        <span class="icon">
                            <ion-icon name="bookmarks-outline"></ion-icon>
                        </span>
                        <span class="title">Book</span>
                    </button>

                    <div class="slotsection hide">
                    
                    <a href="admin-verifybooking.php">Verify Booking</a>
                    <a href="admin-add-delete.php">Cancel Booking</a>


                   
               </div> 


                </li> -->



                <!-- <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="bookmarks-outline"></ion-icon>
                        </span>
                        <span class="title">Book</span>

                    </a>
                </li> -->
                <!-- <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li> -->
                <!-- <li>
                </li> -->

            </ul>

        </div>


<div class="main">


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "opbs";

$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$succ = $err = "";

if (isset($_POST['submit'])) {
    $slotnum = $_POST['slotnum'];

    if (isset($_FILES["slotpicture"]) && $_FILES["slotpicture"]["error"] === 0) {
        // File is uploaded and there are no errors
        $slotpicture = $_FILES["slotpicture"]["name"];
        move_uploaded_file($_FILES["slotpicture"]["tmp_name"], "./images1/" .$slotpicture);
    } else {
        // Handle the case when no file is uploaded or there are errors
        $slotpicture = ""; // Set a default value or display an error message
    }

    $slotstatus = $_POST['slotstatus'];

    $query = "INSERT INTO slot_details (slotnum, slotpicture, slotstatus) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt) {
        $stmt->bind_param('iss', $slotnum, $slotpicture, $slotstatus);
        $result = $stmt->execute();
        if ($result) {
            $succ = "Slot Added";
        } else {
            $err = "Please Try Again Later";
        }
    } else {
        $err = "Database Error: " . $mysqli->error;
    }
}

?>



<div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Slot Number</label>
                <input type="text" class="form-control" name="slotnum" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Slot Picture:</label>
                <input type="file" class="btn btn-primary" name="slotpicture">
            </div>
            <div class="mb-3">
                <label>Slot Status:</label>
                <select class="form-control" name="slotstatus">
                    <option>Booked</option>
                    <option>Available</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Slot</button>
        </form>
    </div>
    <?php
    if (!empty($succ)) {
        echo '<p class="success">' . $succ . '</p>';
    }
    if (!empty($err)) {
        echo '<p class="error">' . $err . '</p>';
    }
    ?>
    </div>
</div>

<script>
      let usersection = document.querySelector(".usersection");
      let slotsection = document.querySelector(".slotsection");
      let booksection = document.querySelector(".booksection");

        function showHideUsers(){ 
       usersection.classList.toggle("hide"); 
    }
        function showHideSlot(){ 
       slotsection.classList.toggle("hide"); 
    }

        function showHideBook(){ 
       booksection.classList.toggle("hide"); 
    }
    
    
    </script>

</body>
</html>
