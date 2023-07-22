

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
                    <button>
                        <span class="icon">
                            <ion-icon name="car-sport-outline"></ion-icon>
                        </span>
                        <span class="title">OPBS ADMIN</span>
                    </button>
                </li>

                <li>
                    <button>
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </button>
                </li>

                <li>

                    <button onclick="showHideUsers()">
                    <span class="icon">
                        <ion-icon name="people"></ion-icon>
                    </span>
                    <span class="title">Users</span>

                    </button>
              <div class="usersection hide">

                    <a href="admin-add-user.php">Add Users</a>
                    <a href="admin-add-user.php">Add Users</a>
                    <a href="admin-add-user.php">Add Users</a>
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
                    <a href="admin-add-user.php">Add Users</a>
                    <a href="admin-add-user.php">Add Users</a>
                    <a href="admin-add-user.php">Add Users</a>
               </div> 


                </li>

                <li>
                    <button>
                        <span class="icon">
                            <ion-icon name="bookmarks"></ion-icon>
                        </span>
                        <span class="title">Bookings</span>
                    </button>
                </li>




                <li>
                    <button>
                        <span class="icon">
                            <ion-icon name="key"></ion-icon>
                        </span>
                        <span class="title">Password Resets</span>

                    </button>
                </li>
                <li>
                    <button>
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </button>
                </li>
                <li>
                </li>

            </ul>

        </div>
</div>










<div class="main">








   

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"> -->
<!--     let usersection = document.querySelector(".usersection") -->
<!--     let ishown = true; -->
<!--     // -->
<!--     // function showHideUsers(){ -->
<!--     //   if (ishown){ -->
<!--     //     usersection.style.display = "none"; -->
<!--     //     ishown = false; -->
<!--     //   } -->
<!--     //   else { -->
<!--     //     usersection.style.display = "block"; -->
<!--     //     ishown = true; -->
<!--     //   } -->
<!--     // } -->
<!---->
<!--     function showHideUsers(){ -->
<!--       usersection.classList.toggle("hide"); -->
<!--     } -->
<!--     </script> -->
 
    <script>
      let usersection = document.querySelector(".usersection");
      let slotsection = document.querySelector(".slotsection");
        function showHideUsers(){ 
       usersection.classList.toggle("hide"); 
    }
        function showHideSlot(){ 
       slotsection.classList.toggle("hide"); 
    }
    
    </script>
</body>
</html>


