
<?php
include 'config.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $vehicleno = $_POST['vehicleno'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $hours = $_POST['hours'];

    $sql = "INSERT INTO bookslot (name, vehicleno, date, time, hours) VALUES ('$name', '$vehicleno', '$date', '$time', '$hours')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>