<?php

$conn = mysqli_connect('localhost','root','','opbs');
if(!$conn)
{
    die("Error in connection");
}
else{
    echo("Data base connected successfully");
}

?>
