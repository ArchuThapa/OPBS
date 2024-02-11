<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])){

   $uname = $_POST['uname'];
   $ulicenceno = $_POST['ulicenceno'];
   $uvehicleno = $_POST['uvehicleno'];



   $uemail = $_POST['uemail'];
   $ucontact = $_POST['ucontact'];
   $upwd = $_POST['upwd'];
   
   $sql="SELECT * FROM register_user WHERE uemail='$uemail' AND upwd='$upwd' ";
   $result = mysqli_query($conn, $sql);
   $present=mysqli_num_rows($result);
   if($present > 0){
    $_SESSION['email_alert']='1';
    header("Location:register_form.php");
   }
   else{

         $sql = "INSERT INTO register_user(uname,ulicenceno, uvehicleno,uemail,ucontact,upwd) VALUES('$uname','$ulicenceno', '$uvehicleno','$uemail',$ucontact,'$upwd')";
        
         

 $result=mysqli_query($conn,$sql);
if ($result) {
            // <!-- header("location:login_form.php"); -->
            echo "Data inserted successfully!";
           
            // header("location:login_form.php"):
        }  

        //  if ($conn->query($sql) === TRUE) {
        //     header("location:login_form.php");
        //     // echo "Data inserted successfully!";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();
        }
    }
      

         ?>  
