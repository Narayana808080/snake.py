<?php
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>New Leave Application</title>
    <style>
       .popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9999;
}

.popup-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border-radius: 38px;
}

.popup-content h2 {
  margin-top: 0;
}

.popup-content form {
  display: flex;
  flex-direction: column;
}

.popup-content label {
  margin-bottom: 5px;
}

.popup-content input,
.popup-content textarea {
  margin-bottom: 10px;
}

.popup-content button[type="submit"] {
  align-self: flex-end;
}

.container-1 {
            display: inline-block;
            max-width: 800px;
            margin: 40px auto;
            margin-left: 140px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
        .container-1{
            margin-left:14px;
            padding:20px;
        }
    }

    </style>
</head>
<body>
<div class="container-1">
    <h2> leave applicaion</h2>
<button onclick="openPopup()">Apply for New Leave</button>

<div id="popup" class="popup">
  <div class="popup-content">
    <h2>Leave Application</h2>
    <form>
      <!-- Leave application form fields -->
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="number">mobile No:</label>
      <input type="int" id="mobile" name="number" required>
      
      <label for="dept">Department:</label>
      <input type="text" id="Dept" name="Dept" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>
      
      <label for="reason">Reason:</label>
      <textarea id="reason" name="reason" required></textarea>

      <label for="days">No.of days leave:</label>
      <input type="int" id="days" name="days" required>
      
      <button type="submit">Submit</button>
      <button onclick="closePopup()">Cancel</button> <!-- Added cancel button -->
    </form>
  </div>
</div>

  <script>
function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}
  </script> 
</body>
</html>