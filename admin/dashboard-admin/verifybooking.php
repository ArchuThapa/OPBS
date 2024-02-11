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



// for data fetch in form
$name = '';
$vehicleno = '';
$slotpicture = '';
$date = '';
$time = '';
$hours = '';

// Fetch combined data using INNER JOIN
$query = "SELECT bookslot.id, bookslot.name,  bookslot.vehicleno, 
                 slot_details.slotpicture, 
                 bookslot.date, bookslot.time, bookslot.hours
          FROM slot_details
          INNER JOIN bookslot ON slot_details.slotnum =  bookslot.id";

$result = $mysqli->query($query);





if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $vehicleno = $row['vehicleno'];
    $slotpicture = $row['slotpicture'];
    $date = $row['date'];
    $time = $row['time'];
    $hours = $row['hours'];
} else {
    echo "No records found.";
}








$booking_verified = true;

// Redirect back to admin-verifybooking.php with query parameter indicating booking verification status
header("Location: admin-verifybooking.php?booking_verified=" . ($booking_verified ? 'true' : 'false'));
exit;
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Booking</title>
    <link rel="stylesheet" href="assets/css/manageuser.css">
    <link rel="stylesheet" href="assets/css/adduser.css">
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css " rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
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
                    <a href="admin-add-slot.php">Add Slot</a>
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

<a href="#">Verify Booking</a>
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



                
                  
                        
<form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control"  name="uname"  autocomplete="off" value=<?php echo $name;?> readonly>
</div>



<div class="mb-3">
    <label>Vehicle No.</label>
    <input type="text" class="form-control" name="vehicleno"  autocomplete="off" value=<?php echo $vehicleno;?> readonly>
</div>

<!-- <div class="mb-3">
    <label>SlotPicture</label>
    <input type="text" class="form-control"  name="slotpicture"  autocomplete="off" value=<?php echo $slotpicture;?> >
</div> -->


<div class="mb-3">
    <label>SlotPicture</label><br><br>

    <img src='./images1/<?php echo $row['slotpicture']; ?>' height='170px' width='200px'>
</div>


<div class="mb-3">
    <label>Booking Date</label>
    <input type="text" class="form-control"  name="date"  autocomplete="off" value=<?php echo $date;?> readonly>
</div>

<div class="mb-3">
    <label>Booking Time</label>
    <input type="text" class="form-control"  name="time" autocomplete="off" value=<?php echo $time;?> readonly >
</div>


<div class="mb-3">
    <label>Hour</label>
    <input type="text" class="form-control" name="hours" autocomplete="off" value=<?php echo $hours;?> readonly >
</div>




  <button type="verify"  name="verify" class="btn btn-primary">Verify Booking</button>
 
</form>

<!-- <div id="verificationMessage" style="display: none;" class="alert alert-success">Booking Verified!</div> -->

               

</div>
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
    

    // document.querySelector('button[name="verify"]').addEventListener('click', function(event) {
    //         document.getElementById('verificationMessage').style.display = 'inline';
    //     });
   
    </script>

</body>
</html>
