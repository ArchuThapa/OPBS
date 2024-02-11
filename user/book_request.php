<?php
include 'config.php';
session_start();

if (!isset($_SESSION['id'])) {
    header('Location: login_user.php');
    exit();
}

$user_id = $_SESSION['id'];

if (isset($_POST['request'])) {
            $reason = mysqli_real_escape_string($conn, 'Booking Request');

    // $timestamp = date('Y-m-d H:i:s');
    
    $insert_request_sql = "INSERT INTO book_requests (user_id, reason) VALUES ($user_id, '$reason')";
    
}
?>
