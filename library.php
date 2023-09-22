<?php
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Library Books List</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}
  h1 {
  text-align: center;
}

.department {
  margin-bottom: 20px;
}

h2 {
  color: #3498db;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 5px;
}
.cont-1 {
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
            .cont-1{
            margin-left:14px;
        }
    }
</style>
<body>
    <div class="cont-1">
  <h1>Library Books List</h1>
  
  <div class="department">
    <h2>Computer Science</h2>
    <ul>
      <li>Book 1</li>
      <li>Book 2</li>
      <li>Book 3</li>
    </ul>
  </div>
  
  <div class="department">
    <h2>History</h2>
    <ul>
      <li>Book 4</li>
      <li>Book 5</li>
      <li>Book 6</li>
    </ul>
  </div>
  
  <div class="department">
    <h2>Mathematics</h2>
    <ul>
      <li>Book 7</li>
      <li>Book 8</li>
      <li>Book 9</li>
    </ul>
  </div>
  
  <div class="department">
    <h2>English Literature</h2>
    <ul>
      <li>Book 10</li>
      <li>Book 11</li>
      <li>Book 12</li>
    </ul>
  </div>
  
  <div class="department">
    <h2>Physics</h2>
    <ul>
      <li>Book 13</li>
      <li>Book 14</li>
      <li>Book 15</li>
    </ul>
  </div>
</body>
</html>