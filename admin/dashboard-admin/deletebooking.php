<?php
include 'config.php';

$id = $_GET['deleteid']; 
$sql = "DELETE FROM bookslot WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header('location: admin-verifybooking.php');
    exit(); 
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
