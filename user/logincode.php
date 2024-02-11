<?php 
// include 'config.php';
// if(isset($_POST['submit']))
// {
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $sql="SELECT * FROM register_data WHERE email='$email' AND password='$password'";
//     $result=mysqli_query($conn,$sql);
//     $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
//     $count=mysqli_num_rows($result);

//     if($count==1){
//         header("Location:bookslot.php");
//     }
//     else{
//         header("Location:register_form.php");
//     }
// }
?> 


<?php 
include 'config.php';
if(isset($_POST['submit']))
{
    $uemail=$_POST['uemail'];
    $upwd=$_POST['upwd'];
    $sql="SELECT * FROM register_user WHERE uemail='$uemail' AND upwd='$upwd'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1){
        header("Location:/bookslot.php");
    }
    else{
         header("Location:register_form.php");
     }
}
?> 