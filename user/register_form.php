<?php

// include 'config.php';

// if(isset($_POST['submit']))

//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $contact = $_POST['contact'];
//    $password = $_POST['password'];
//    $user_type = $_POST['user_type'];

//          $sql = "INSERT INTO register_data(name,email,contact,password,user_type) VALUES('$name','$email',$contact,'$password','$user_type')";
        
         

//  $result=mysqli_query($conn,$sql);
// if ($result) {
//             // <!-- header("location:login_form.php"); -->
//             echo "Data inserted successfully!";
//         }  

        //  if ($conn->query($sql) === TRUE) {
        //     header("location:login_form.php");
        //     // echo "Data inserted successfully!";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();

      

         ?>  
<?php
session_start();
$message='';
if(isset($_SESSION['email_alert'])){
    $message='User Already Exist!!';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>



    
<div class="form-container">
    <form action="regiscode.php" method="post">
        <h3>Register Now</h3>

        <center><h4 class="alert"><?php echo($message);?></h4></center>
       
       
        <input type="Text" name="uname"  required placeholder="enter your name">
        <input type="int" name="ulicenceno" required placeholder="enter your licence number">
        <input type="int" name="uvehicleno" required placeholder="enter your vehicle number">
        <input type="email" name="uemail" required placeholder="enter your email">
        <input type="contact" name="ucontact" required placeholder="enter your contact">
        <input type="password" name="upwd" required placeholder="enter your password">


    

<input type="submit" name="submit" value="register now" class="form-btn">
<p>already have an account?<a href="login_user.php">login now</a></p>

</form>

</div><?php unset($_SESSION['email_alert']); ?>
</body>
</html>