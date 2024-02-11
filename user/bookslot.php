<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOK SLOT</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="form-container">
        <form action="#" method="post">
            <h3>BOOK Slot</h3>
    
    
           
           
           
            <input type="int" name="licencenum" required placeholder=" Licence Number">
            <input type="int" name="vehiclenum" required placeholder=" Vehicle Number">
             <select name="vehicle_type">
                <option value="vehicle_type">Vehicle Type</option>

                <option value="four Wheeler">Four Wheeler</option>
    <option value="two wheeler">Two wheeler</option>
    </select>
            <!-- <input type="text" name="type" required placeholder="Vehicle Type"> -->
            <input type="text" name="color" required placeholder="Vehicle Color">
            <!-- <input type="text" name="time"  id="time" required placeholder="Entry Time"> -->
<!--             
            <label for="hours">Hours:</label>
  <input type="number" id="hours" name="hours" min="0" max="23" required>
  
  <label for="minutes">Minutes:</label>
  <input type="number" id="minutes" name="minutes" min="0" max="59" required>
  
  <label for="seconds">Seconds:</label>
  <input type="number" id="seconds" name="seconds" min="0" max="59" required>
  
  <button type="button" id="setTimeBtn">Set Time</button>
  
  <label for="time">Current Time:</label>
  <input type="text" id="time" name="time" readonly>
     -->
    
            <!-- <select name="user_type">
                <option value="user">user</option>
    <option value="admin">admin</option>
    </select> -->

    <input type="int" name="parkduration" required placeholder=" Paking Duration(Hours)">
    <input type="int" name="date&time" required placeholder=" Paking Date & Time">



    
    <input type="submit" name="submit" value="BOOK" class="form-btn">
    <!-- <p>already have an account?<a href="login_form.php">login now</a></p> -->
    
    </form>
    <script src=".js/button.js"></script>
</body>
</html>