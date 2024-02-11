<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
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

                    <a href="registable.php">
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
            </div>

            <!-- ================ Bookings List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                   <h2> Bookings </h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                               
                                <td>Name</td>
                                <td>Contact</td>
                                <td>Vehicle Type</td>
                                <td>Vehicle Color</td>
                                <td>Vehicle no.</td>
                                <td>Licence Number</td>
                                <td>Parking Duration(hours)</td>
                                <td>Parking Date & Time</td>
                                <td>Status</td>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>


                                <td><span class="status delivered">Approved</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>

                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>
                            </tr>

                            <tr>
                                <td>Archana Thapa</td>
                                <td>9825383919</td>
                                <td>Two wheeler</td>
                                <td>Black</td>
                                <td>223344</td>
                                <td>7772453</td>
                                <td>2</td>
                                <td>2023/07/15 2:12pm</td>
                                <td><span class="status delivered">Approved</span></td>>
                            </tr>
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