<?php
// include 'config.php';
// if(isset($_GET['deleteid'])){
// $id=$_GET['deleteid']; 
// $sql="delete from register_user where id=$id";
// $result=mysqli_query($conn, $sql);
// if($result){
//     // echo "Deleted Sucessfully";
//     header('location:admin-manage-user.php');
// }
// else{
//     die(mysqli_error($conn));
// }
// }

?>


<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid']; 

    // Delete bookings associated with the user
    $deleteBookingsQuery = "DELETE FROM bookslot WHERE user_id = $id";
    $deleteBookingsResult = mysqli_query($conn, $deleteBookingsQuery);

    // Check if bookings were deleted successfully
    if (!$deleteBookingsResult) {
        die(mysqli_error($conn));
    }

    // Now, delete the user
    $deleteUserQuery = "DELETE FROM register_user WHERE id = $id";
    $deleteUserResult = mysqli_query($conn, $deleteUserQuery);

    // Check if user was deleted successfully
    if ($deleteUserResult) {
        header('location: admin-manage-user.php');
    } else {
        die(mysqli_error($conn));
    }
}
?>
