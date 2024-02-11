
<?php


include 'config.php'; // Include the database connection file

session_start();

// if (!isset($_SESSION['id'])) {
//     header('Location: login_user.php');
//     exit();
// }



// $user_id = $_SESSION['id'];

// $query = "SELECT bookslot.user_id, register_user.uname, register_user.uvehicleno, bookslot.date, bookslot.time, bookslot.hours, bookslot.status
//           FROM bookslot
//           INNER JOIN register_user ON bookslot.user_id = register_user.id";
        //   INNER JOIN slot_details ON bookslot.slot_id = slot_details.slotnum";

        $query = "SELECT bookslot.id AS booking_id, register_user.id AS user_id, register_user.uname, register_user.uvehicleno, bookslot.date, bookslot.time, bookslot.hours, bookslot.status
          FROM bookslot
          INNER JOIN register_user ON bookslot.user_id = register_user.id";

$result = $conn->query($query);




 
if (!$result) {
    die("Query failed: " . $conn->error);
}
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
    <style>
    .success {
        color: green;
    }

    .error {
        color: red;
    }


    table {
        width: 80%;
        margin-left:80px;
        border-collapse: collapse;
        
    }

    th, td {
        border: 2px solid blue;
        padding: 8px;
        text-align: left;
    }

    td {

        color: black;
            font-size: 20px;
    }

    h1{
        text-align: center;
        color: black;
    }
    button{
        background-color: green;
        
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
                    <a href="admin-add-slot.php">Add Slot</a>
                    <!-- <a href="admin-add-update.php">Update Slot</a>
                    <a href="admin-add-delete.php">Delete Slot</a> -->


                   
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
<!-- <a href="admin-cancelbooking.php">Cancel Booking</a> -->

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



<h1>Welcome to Admin Dashboard</h1>




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


<?php
// Close the database connection
$conn->close();
?>