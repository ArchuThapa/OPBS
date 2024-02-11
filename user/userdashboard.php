

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="assets/css/manageuser.css">
    <link rel="stylesheet" href="assets/css/adduser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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


        <?php
include('config.php');

session_start();
if (!isset($_SESSION['id'])) {
    header('Location: /login_user.php');
    exit();
}

// Get the logged-in user's ID
$user_id = $_SESSION['id'];

// $query_user = "SELECT   id, uname, uemail, ucontact,  uvehicleno FROM register_user";
// $result_user = mysqli_query($conn, $query_user);
// $user_data = mysqli_fetch_assoc($result_user);

// $query_bookings = "SELECT  id, vehicleno, date, time, hours, status FROM bookslot"; // Fetch only user's bookings
// $result_bookings = mysqli_query($conn, $query_bookings);

// $query = "SELECT bookslot.id AS booking_id, register_user.id AS user_id, register_user.uname, register_user.uvehicleno, bookslot.date, bookslot.time, bookslot.hours, bookslot.status
// FROM bookslot
// INNER JOIN register_user ON bookslot.user_id = register_user.id";

// $result = $conn->query($query);

// Fetch user details
$query_user = "SELECT id, uname, uemail, ucontact, uvehicleno FROM register_user WHERE id = $user_id";
$result_user = mysqli_query($conn, $query_user);
$user_data = mysqli_fetch_assoc($result_user);

// Fetch the bookings of the logged-in user
$query_bookings = "SELECT bookslot.id AS booking_id, register_user.id AS user_id, register_user.uname, register_user.uvehicleno, bookslot.date, bookslot.time, bookslot.hours, bookslot.status
                    FROM bookslot
                    INNER JOIN register_user ON bookslot.user_id = register_user.id
                    WHERE bookslot.user_id = $user_id";

$result_bookings = mysqli_query($conn, $query_bookings);




?>
<form method="POST" action="cancelbooking.php">
            <h2>Your Bookings</h2>
            <h3>Information</h3>
            <p>Name: <?php echo $user_data['uname']; ?></p>
            <p>Email: <?php echo $user_data['uemail']; ?></p>
            <p>Phone: <?php echo $user_data['ucontact']; ?></p>
            <p>Vehicleno: <?php echo $user_data['uvehicleno']; ?></p>

            <h3>Your Booked Tickets</h3>
            <table>
                <tr>
                
                <th>Select</th>
                <th> Booking Id</th>
                  
                  


                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>Booking Hour</th>
                    <th>Status</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result_bookings)) {
                ?>
                <tr>
              
            <td><input type='checkbox' name='id[]' value='" . $row['booking_id'] . "'></td>
            <td><?php echo $row['booking_id']; ?></td>

                
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['hours']; ?></td>
                    <td>
                        <?php
                            if (!is_null($row['status'])) {
                                if ($row['status'] == 1) {
                                    echo "Booked";
                                } elseif ($row['status'] == 0) {
                                    echo "Declined";
                                } else {
                                    echo "Pending";
                                }
                            } else {
                                echo "Pending";
                            }
                            ?> </td>
                </tr>
                <?php
                }
                ?>
          

           
        </table>

        <?php


?>
        <button type="submit" name="cancel_selected">Cancel Booking</button>
        <a href="pdf.php" target="_blank" class="download-button">Download Ticket</a>
            <!-- <button>Cancel Booking</button>
            <a href="#">Download Ticket</a> -->
        </div>
            </form>

    </div>
</div>

<script>
    let usersection = document.querySelector(".usersection");
    let booksection = document.querySelector(".booksection");

    function showHideUsers(){
        usersection.classList.toggle("hide");
    }

    function showHideBook(){
        booksection.classList.toggle("hide");
    }
</script>

</body>
</html>
