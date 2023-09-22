<?php
include 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Slips</title>
    <!-- Include Bootstrap CSS -->
  
    <!-- Custom CSS for styling -->
    <style>
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
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .pay-slip {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #e0e0e0;
            margin-bottom: 20px;
            display: inline-block;
        }
        .employee-name {
            font-size: 24px;
            font-weight: bold;
        }
        .pay-details {
            margin-top: 10px;
        }
        @media (max-width: 768px) {
            .container-1{
                margin-left: 14px;
            }
        }
        /* Add more custom styles for your pay slip layout */
    </style>
</head>
<body>
    <div class="container-1">
    <div class="container">
        <!-- Example Pay Slip - You can repeat this section for each pay slip -->
        <div class="pay-slip">
            <div class="employee-name">John Doe</div>
            <div class="pay-details">
                <div>Employee ID: 12345</div>
                <div>Payment Date: January 1, 2023</div>
                <div>Payment Amount: $1,500.00</div>
                <!-- Add more pay details as needed -->
            </div>
        </div>
        <!-- Repeat the pay slip section for each pay slip -->
    </div>
    <!-- Include Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
