<?php
$conn=new mysqli('localhost','root','','opbs');
if(!$conn){

    die(mysqli_error($conn));
    // echo "Connection successful";

}

// else{
//     die(mysqli_error($conn));
// }


?>