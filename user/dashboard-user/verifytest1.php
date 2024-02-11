
<?php


include('config.php');



$query_user = "SELECT uname, uemail, ucontact FROM register_user WHERE id = '$id'";
$result_user = mysqli_query($conn, $query_user);
$user_data = mysqli_fetch_assoc($result_user);


$query_bookings = "SELECT * FROM bookslot WHERE id = '$id'"; // Fetch only user's bookings
$result_bookings = mysqli_query($conn, $query_bookings);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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



    
    .slotdiv {
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 200px;
        max-height: 170px;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    a:hover {
        text-decoration: underline;
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
                        <span class="title">OPBS USER</span>
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

<button onclick="showHideBook()">
<span class="icon">
    <ion-icon name="bookmarks-outline"></ion-icon>
</span>
<span class="title">Book</span>

</button>
<div class="booksection hide">

<a href="#">View Booking</a>
<a href="cancelbooking.php">Cancel Booking</a>

</div> 
</li>



            </ul>

        </div>


<div class="main">



<div class="slotdiv">

<h2>Your Bookings</h2>


        <h3>Information</h3>
        <p>Name: <?php echo $user_data['uname']; ?></p>
        <p>Email: <?php echo $user_data['uemail']; ?></p>
        <p>Phone: <?php echo $user_data['ucontact']; ?></p>
        <h3>Your Booked Tickets</h3>
        <table>
        <tr>
     
        <th>Booking Date</th>
        <th>Booking Time</th>
        <th>Booking Hour</th>
        <th>Status</th>
    
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result_bookings)) {

        <td><?php echo $date; ?></td>
        <td><?php echo $time; ?></td>
        <td><?php echo $hours; ?></td> 
        <td><?php echo $status; ?></td>

        }
    
        ?>
  
    </table>
    <button>Cancel Booking</button>
    <a href="#">Download Ticket</a></td>

          
        </div>

</div>

<script>
      let usersection = document.querySelector(".usersection");
    //   let slotsection = document.querySelector(".slotsection");
      let booksection = document.querySelector(".booksection");

        function showHideUsers(){ 
       usersection.classList.toggle("hide"); 
    }
    //     function showHideSlot(){ 
    //    slotsection.classList.toggle("hide"); 
    // }

        function showHideBook(){ 
       booksection.classList.toggle("hide"); 
    }
    
    
    </script>

</body>
</html>