
<?php

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

                

                    <!-- <a href="index1.html">
                <li>

                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Users</span>

                    </a>
                </li> -->

                <!-- <li>

                    <button onclick="showHideUsers()">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <span class="title">User</span>

                    </button>
              <div class="usersection hide">

                    <a href="viewuser.php">View</a>
                    <a href="update1.php">Update</a>
                
               </div> 
          </li> -->


                <!-- <li>
                    <button onclick="showHideSlot()">
                        <span class="icon">
                            <ion-icon name="location"></ion-icon>
                        </span>
                        <span class="title">Slots</span>
                    </button>

                    <div class="slotsection hide">
                    <a href="#">Add Slot</a>
                    <a href="admin-add-update.php">View Slot</a>
                    <a href="admin-add-delete.php">Delete Slot</a>


                   
               </div> 


                </li> -->



                <li>

<button onclick="showHideBook()">
<span class="icon">
    <ion-icon name="bookmarks-outline"></ion-icon>
</span>
<span class="title">Book</span>

</button>
<div class="booksection hide">

<a href="verifybooking.php">View Booking</a>
<a href="cancelbooking.php">Cancel Booking</a>

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

<!-- <h1>Slot Details</h1> -->


<div class="slotdiv">

<!-- <table>
        <thead>
            <tr>
                <td>slot no.</td>
                <td>image</td>
                <td>status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody> -->
            <?php
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $database = "opbs";
            
            // $conn = mysqli_connect($servername, $username, "", $database);
            // if ($conn->connect_error){
            //     die("connection failed:" . $conn->connect_error);
            // }
            
            // $sql = "SELECT * FROM slot_details";
            // $result = mysqli_query($conn, $sql);
            
            // if ($result && mysqli_num_rows($result) > 0) {
            //     while ($row = mysqli_fetch_assoc($result)) {
            //         echo "<tr>
            //                 <td>" . $row["slotnum"] . "</td>
            //                 <td>

                            
            //                     <img src='./images1/" . $row["slotpicture"] . "' height='170px' width='200px'>
            //                 </td>


                            
            //                 <td>" . $row["slotstatus"] . "</td>
            //                 <td>
            //                     <a class='' href='login_user.php'>Book Slot</a>
            //                 </td>
            //               </tr>";
            //     }
            // } else {
            //     echo "<tr><td colspan='4'>No slots available.</td></tr>";
            // }
            ?>
        <!-- </tbody>
    </table> -->

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
