<?php
include 'index.php';                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Circulars Page</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.information {
    text-align: center;
}

.circular {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 20px auto;
    max-width: 100%;
}

.circular img {
    max-width: 100%;
    height: auto;
}

input[type="file"] {
    display: none;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}
.image-upload {
    text-align: center;
    padding: 20px;
}
.preview {
    border: 2px dashed #333;
    padding: 20px;
    margin: 20px auto;
    max-width: 100%;
}

#image-preview {
    max-width: 100%;
    height: auto;
    display: none;
}

</style>
<body>
    <main>
        <section class="information">
            <h2>Latest Circular</h2>
            <div class="circular">
                <form id="circularForm">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required><br>
      
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Create Circular</button>
     
    </form>
            </div>
            
        </section>
    </main>
    
<div>
    
    <footer>
        &copy; 2023 Your Organization
    </footer>

    
</body>
</html>
