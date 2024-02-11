<?php 
// include 'config.php';
// if(isset($_POST['submit']))
// {
//     $uemail=$_POST['uemail'];
//     $upwd=$_POST['upwd'];
//     $sql="SELECT * FROM register_user WHERE uemail='$uemail' AND upwd='$upwd'";
//     $result=mysqli_query($conn,$sql);
//     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//     $count=mysqli_num_rows($result);

//     if($count==1){
//         header("Location:./booking/index.php");
//     }
//     else{
//          header("Location:register_form.php");
//      }
// }
?> 
<?php 
@include 'config.php';
session_start();

if(isset($_POST['submit']))
{
    $uemail=$_POST['uemail'];
    $upwd=$_POST['upwd'];
    $sql="SELECT id FROM register_user WHERE uemail='$uemail' AND upwd='$upwd'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);

    if($count==1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id']; // Set session variable
        header("Location:index.php");
        exit();
    }
    else{
        header("Location:register_form.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    
<div class="form-container">
    <form action="#" method="POST">
        <h3>Login Now</h3>
       
        <input type="email" name="uemail" required placeholder="enter your email">
        <input type="password" name="upwd" required placeholder="enter your password">
       



<input type="submit" name="submit" value="login now" class="form-btn">
<p>don't have an account?<a href="index.php">register now</a></p>

</form>

</div>


</body>
</html>