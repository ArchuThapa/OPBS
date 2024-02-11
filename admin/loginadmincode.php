<?php 
include 'config.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM admin_login WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        header("Location:./dashboard-admin/index.php");
    }
    else{
         header("Location:register_form.php");
     }
}
?> 