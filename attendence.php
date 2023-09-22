<?php
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Attendance Management System</title>
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
    .body_3 {
      font-family: Arial, sans-serif;
    }
    h2 {
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    .button-container {
      text-align: center;
      margin-top: 20px;
    }
    .button-container button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    .button-container button:hover {
      background-color: #45a049;
    }
    @media (max-width: 768px) {
        .container-1{
            margin-left:8px;
        }
    }
  </style>
</head>
<body>
    <div class="container-1 ">
  <h2>Attendance Management System</h2>
  <table>
    <tr>
      <th>Date</th>
      <th>No. of Present</th>
      <th>No. of Absent</th>
    </tr>
    <tr>
      <td>2023-08-01</td>
      <td>25</td>
      <td>5</td>
    </tr>
    <tr>
      <td>2023-08-02</td>
      <td>23</td>
      <td>7</td>
    </tr>
    <tr>
      <td>2023-08-03</td>
      <td>24</td>
      <td>6</td>
    </tr>
  </table>
  <div class="button-container">
    <button>Download Report</button>
  </div>
</body>
</html>