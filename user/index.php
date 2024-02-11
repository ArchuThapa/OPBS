<?php
session_start(); // Start the session

// Check if user is not logged in
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Online Parking Booking System </title>
    <!-- <link rel="stylesheet" href="./style1.css"> -->
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/archana.css">
    <!-- <link rel="stylesheet" href="login.css"> -->


    <style>
        table {
        width: 80%;
        margin-left:80px;
        border-collapse: collapse;
        
    }

    th, td {
        border: 4px solid black;
        padding: 8px;
        text-align: left;
    }

    td {

        color: black;
            font-size: 20px;
    }
  
        </style>
</head>
<body>
<header>
    <h2 style="color: black">Online Parking Booking System</h2>
    <nav class="navigation">
        <a href="#"><b style="color:black">Home</b></a>
        <?php if (!isset($_SESSION['id'])): ?>
            <a href="login_user.php"><b style="color:black">Login</b></a>
        <?php else: ?>
            <a href="userdashboard.php"><b style="color:black">My Bookings</b></a>
            <a href="logout.php"><b style="color:black">Logout</b></a>

        <?php endif; ?>
    </nav>
</header>



    
<div class="banner">
<img src="./images/bg-noblur.webp" width="100%" height="600px">
<!-- <img src="./images/parking.jpg" width="100%" height="500px"> -->

</div>



<div class="button1">
    <button>Book Here</button>
</div>


<div class="slotdiv">
<!-- <img src="./Desktop - 1.svg" width="100%" height="600px"> -->
<!-- 
    <div class="btnRows btnRow1">
        <div class="btncolumns">
            <button class="button2">Slot 1</button>
        </div>
        <div class="btncolumns"> -->
        <!-- <button><a href="./register_form.php">Slot 1</a></button> -->
        <!-- <button class="button2">Slot 2</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 3</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 4</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 5</button>
        </div>
    </div>
    <div class="btnRows btnRow2">
        <div class="btncolumns">
            <button class="button2">Slot 6</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 7</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 8</button>
        </div>
        <div class="btncolumns">
            <button class="button2" >Slot 9</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 10</button>
        </div>
    </div>
    <div class="btnRows btnRow3">
        <div class="btncolumns">
            <button class="button2">Slot 11</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 12</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 13</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 14</button>
        </div>
        <div class="btncolumns">
            <button class="button2">Slot 15</button>
        </div>
    </div>
     -->



     <table>
        <thead>
            <tr>
                <td>slot no.</td>
                <td>image</td>
                <td>status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "opbs";

$conn = mysqli_connect($servername, $username, "", $database);
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}

$sql = "SELECT * FROM slot_details";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["slotnum"] . "</td>
                <td>
                    <img src='./images1/" . $row["slotpicture"] . "' height='170px' width='200px'>
                </td>
                <td>" . $row["slotstatus"] . "</td>
                <td>";
    // Check if user is logged in
    if (isset($_SESSION['id'])) {
        // Pass the user ID as a parameter in the URL
        echo "<a class='' href='bookform.php?user_id={$_SESSION['id']}'>Book Slot</a>";
    } else {
        echo "<a class='' href='register_form.php'>Register/Login to Book Slot</a>";
    }
echo "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No slots available.</td></tr>";
}
?>

        </tbody>
    </table>




</div>





<script src="./js/button.js"></script>


</body>
</html>