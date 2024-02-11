// Get all the buttons with the class "my-button"
const buttons = document.querySelectorAll('.button2');

// Define the link URL
const linkUrl = './login_user.php';



// Loop through each button and assign the link URL
buttons.forEach(button => {
  button.addEventListener('click', () => {
    window.location.href = linkUrl;
  });
});



// document.addEventListener('DOMContentLoaded', function() {
//     var timeField = document.getElementById('time');
  
//     // Update time every second
//     setInterval(updateTime, 1000);
  
//     // Function to update the time field
//     function updateTime() {
//       var now = new Date();
//       var hours = now.getHours().toString().padStart(2, '0');
//       var minutes = now.getMinutes().toString().padStart(2, '0');
//       var seconds = now.getSeconds().toString().padStart(2, '0');
  
//       var currentTime = hours + ':' + minutes + ':' + seconds;
//       timeField.value = currentTime;
//     }
//   });


//   document.addEventListener('DOMContentLoaded', function() {
//     var hoursField = document.getElementById('hours');
//     var minutesField = document.getElementById('minutes');
//     var secondsField = document.getElementById('seconds');
//     var setTimeBtn = document.getElementById('setTimeBtn');
//     var timeField = document.getElementById('time');
  
//     // Add event listener to the 'Set Time' button
//     setTimeBtn.addEventListener('click', function() {
//       setTime();
//     });
  
//     // Function to set the time based on user input
//     function setTime() {
//       var hours = parseInt(hoursField.value).toString().padStart(2, '0');
//       var minutes = parseInt(minutesField.value).toString().padStart(2, '0');
//       var seconds = parseInt(secondsField.value).toString().padStart(2, '0');
  
//       var currentTime = hours + ':' + minutes + ':' + seconds;
//       timeField.value = currentTime;
//     }
//   });