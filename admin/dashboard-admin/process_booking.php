<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['accept'])) {
        $bookingId = $_POST['bookingId'];
        updateBookingStatus($bookingId, 1); // Set status to accepted (1)
    } elseif (isset($_POST['decline'])) {
        $bookingId = $_POST['bookingId'];
        updateBookingStatus($bookingId, 0); // Set status to declined (0)
    }
}

function updateBookingStatus($bookingId, $status) {
    global $conn;
    
    // Update the status of the specific booking
    $updateSql = "UPDATE bookslot SET status = $status WHERE id = $bookingId";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        header("Location: admin-verifybooking.php?success=1");
        exit;
    } else {
        echo "Error updating booking status: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

