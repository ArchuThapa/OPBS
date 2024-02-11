<?php
session_start(); // Start the session
include 'config.php';

if (isset($_POST['submit'])) {
    // Get user ID if logged in
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
    } else {
        echo "Error: User ID not provided.";
        exit();
    }

    $date = $_POST['date'];
    $time = $_POST['time'];
    $hours = $_POST['hours'];

    // Insert data into bookslot table
    $sql = "INSERT INTO bookslot (user_id, date, time, hours) 
            VALUES ('$user_id', '$date', '$time', '$hours')";

$sql_request = "INSERT INTO book_requests (user_id, reason) 
VALUES ('$user_id', 'booking request')";

    $result = mysqli_query($conn, $sql);

    $result_request = mysqli_query($conn, $sql_request);
    if ($result && $result_request) {
        // echo "Book request submitted successfully!";
        header('Location:  userdashboard.php');


    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Slot Here</title>
    <!-- Bootstrap stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets1/css/bootstrap.min.css">
    <!-- ClockPicker Stylesheet -->
    <link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Book Slot Here</h1>

    <?php
    // Include database connection
    include './config.php';
    // Check if user is logged in
    if (isset($_SESSION['id'])) {
        // Fetch user information from database based on ID
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM register_user WHERE id='$user_id'";
        $result = mysqli_query($conn, $sql);
        // Check if query executed successfully
        if ($result) {
            $user_info = mysqli_fetch_assoc($result);
            // Check if user information is retrieved successfully
            if ($user_info) {
                // Pass user information to the booking form as hidden input fields
                echo "<form method='post' action='#'>
                        <label>Select Date:</label><input type='text' name='date' id='datepicker'><br><br>
                        <label>Start Time:</label>
                        <input type='text' name='time' id='demo-input' class='form-control clockpicker'><br><br>
                        <label name='hours'>Select Hours:</label>
                        <input type='text' name='hours'>
                        <br><br>
                        <input type='submit' name='submit' value='Confirm Booking'>
                    </form>";
            } else {
                echo "Error: User information not found.";
            }
        } else {
            echo "Error: " . mysqli_error($conn); // Display MySQL error
        }
    } else {
        // Redirect to login page if user is not logged in
        header("Location: login_user.php");
        exit();
    }
    ?>

    <h6>Note: make payment manually 1hrs=Rs.20</h6>

    <!--Importing jQuery and Bootstrap scripts -->
    <script type="text/javascript" src="assets1/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script type="text/javascript" src="assets1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>

    <!-- ClockPicker script -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#datepicker").datepicker();
            $('#demo-input').clockpicker({
                autoclose: true
            });
        });
    </script>
</body>
</html>
