<?php
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Leave History</title>
    <style>
        /* CSS styles for the table */
        table {
            width: 50%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
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

        .buttonn_for_leave{
    	text-align: right;
        
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
<div class="buttonn_for_leave">
    	<button><a href="new_leave.php">NEW LEAVE</button></a>
    </div>
    <h1>Faculty Leave History</h1>
    <table>
        <tr>
            <th>Number of Leaves</th><br>
            <th>Leaves Used</th>
        </tr>
        <tr>
            <td>12</td>
            <td>5</td>
        </tr>
        <!-- Add more rows for additional faculty members if needed -->
    </table>
    
</body>
</html>