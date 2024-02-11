<?php
include('config.php');

if(isset($_POST['cancel_selected']) && isset($_POST['id'])) {
    $bookingIds = $_POST['id']; // Array of selected booking IDs to cancel

    // Update the status of selected bookings to 'cancelled'
    foreach($bookingIds as $bookingId) {
        // Prepare the query to update the status
        $updateQuery = "UPDATE bookslot SET status = 'cancelled' WHERE id = $bookingId";
        
        // Execute the update query
        if(mysqli_query($conn, $updateQuery)) {
            echo "Booking with ID: $bookingId has been successfully cancelled.<br>";
        } else {
            echo "Failed to cancel booking with ID: $bookingId.<br>";
        }
    }
}
?>
