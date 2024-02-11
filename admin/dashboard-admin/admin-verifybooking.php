
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



<h1>Verify Booking</h1>


<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Booking Id</th>
                <th>Name</th>
                <th>Vehicle No</th>
                <!-- <th>SLot Picture</th> -->
                <th>Booking Date</th>
                <th>Booking Time</th>
                <th>Booking Hour</th>
                <th>Status</th>
                <th>Action</th>
                
                

            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['booking_id']; ?></td>

                        <td><?php echo $row['uname']; ?></td>
                        <td><?php echo $row['uvehicleno']; ?></td>
                        <!-- <td><img src="./images1/<?php echo $row['slotpicture']; ?>" height="170px" width="200px"></td> -->
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><?php echo $row['hours']; ?></td>
                        <td>
    <?php 
   
   if (!is_null($row['status'])) {
    if ($row['status'] == 1) {
        echo "Accepted";
    } elseif ($row['status'] == 0) {
        echo "Declined";
    } else {
        echo "Pending";
    }
} else {
    echo "Pending";
}
?>
</td>

<td>


    <form class='action-form' action='process_booking.php' method='post'>
        <input type='hidden' name='bookingId' value='<?php echo $row['booking_id']; ?>'>
        <button type='submit' name='accept' class='btn btn-primary'>Accept</button>
        <button type='submit' name='decline' class='btn btn-danger'>Decline</button>
    </form>

</td>
</tr>
<?php
} // End of while loop
if ($result->num_rows === 0) {
echo "<tr><td colspan='8'>No data available</td></tr>";
}
            }
?>


        </tbody>
    </table>

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