<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Online Parking Booking System </title>
    <!-- <link rel="stylesheet" href="./style1.css"> -->
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="./css/archana.css">
    <!-- <link rel="stylesheet" href="login.css"> -->


    <style>



        table {
        width: 80%;
        margin-left:80px;
        border-collapse: collapse;
        
    }

    th, td {
        border: 4px solid black;
        padding: 8px;
        text-align: left;
    }

    td {

        color: black;
            font-size: 20px;
    }



        .slotdiv {
            text-align: center;
        }

    .slot {
            width: 80px;
            height: 50px;
            border: 2px solid black;
            display: inline-block;
            margin: 5px;
            cursor: pointer;
            text-align: center;
            line-height: 50px;
            font-size: 14px;
            background-color: green; /* Initially green */
        }

        .booked {
            background-color: red !important; /* Override with red when booked */
        }
        </style>
</head>
<body>
        <header>
            <!-- <h2 class="logo"> Online Parking Booking System </h2> -->
            <h2 style="color: black"> Online Parking Booking System </h2>

        <nav class="navigation">
            <a href="#"><b style="color:black">Home</b></a>
            <!-- <a href=""><b style="color:black">About Us</b></a> -->
            <a href="user_page.php"><b style="color:black">Login</b></a>
            <!-- <a href="admin_page.php"><b>Admin</b></a> -->
        </nav>
    </header>


    
<div class="banner">
<img src="./images/bg-noblur.webp" width="100%" height="600px">
<!-- <img src="./images/parking.jpg" width="100%" height="500px"> -->

</div>



<div class="button1">
    <button>Book Here</button>
</div>


<div class="slotdiv">



<?php
     
      // Generate slots dynamically
      $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
      $columns = 15;
      foreach ($rows as $row) {
          for ($i = 1; $i <= $columns; $i++) {
              $slotName = $row . $i;
              echo "<div class='slot' id='slot-$slotName' onclick='bookSlot(\"$slotName\")'>Slot $slotName</div>";
          }
          echo "<br>";
      }
  
      ?>
       
    

</div>


<script>
 function bookSlot(slotName) {
        var slot = document.getElementById('slot-' + slotName);
        if (slot.classList.contains('booked')) {
            // Slot is already booked, do nothing
            return;
        }

        // Simulate booking (you can replace this with your booking logic)
        var confirmed = confirm('Do you want to book Slot ' + slotName + '?');
        if (confirmed) {
            // Update slot status
            slot.classList.add('booked');
            // You can also make an AJAX call here to update the server about the booking
        }
    }
</script>




<script src="./js/button.js"></script>


</body>
</html>