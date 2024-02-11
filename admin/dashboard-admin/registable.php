<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="car-sport"></ion-icon>
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
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="location"></ion-icon>
                        </span>
                        <span class="title">Slots</span>
                    </a>
                </li>

                <li>
                    <a href="hi.php">
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
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/client.jpeg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>

                        <div class="cardName">Profile</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person"></ion-icon>
                    </div>
                </div>


                <div class="card">

                    <a href="#">
                    <div>
                        <div class="cardName">Registered User</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people"></ion-icon>
                    </div>
                    </a>
                </div> 

                <div class="card">
                    <div>

                        <div class="cardName">Available Slots</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="location"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>

                        <div class="cardName">Bookings</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="bookmarks"></ion-icon>
                    </div>
                </div>
            </div> -->

            <!-- ================ Bookings List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                   <h2>Register User </h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                               
                                <td>Id</td>
                                <td>Name</td>
                                <td>Licence No</td>
                                <td>Vehicle No</td>
                                <td>Email</td>
                                <td>Contact</td>
                                <td>Password</td>
                                <td>Action</td>
                                <td></td>
                             
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


              <td>
                    <a class='btn btn-primary btn-sm' href='update'>Update</a></td>
              <td>  <a  class='btn btn-danger btn-sm' href='delete'>Delete</a></td>


    
</tr>";

}

        
?>        
                        </tbody>
                    </table>
                

</div>

                <!-- =========== Scripts =========  -->
                <script src="assets/js/main.js"></script>

                <!-- ====== ionicons ======= -->
                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>