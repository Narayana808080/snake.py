<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
  font-family: sans-serif;
  margin: 0;
}

.container {
  width: 500px;
  margin: 0 auto;
}

h1 {
  text-align: center;
}

form {
  margin-top: 20px;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #000;
  color: #fff;
  cursor: pointer;
}

a {
  text-decoration: none;
  color: #000;
}

@media (max-width: 500px) {
  .container {
    width: 100%;
  }
}
</style>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="index.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" value="Login" a href="index.php">
</a>    </form>
    <a href="/create-new-user">Create New User</a><br>
    <a href="/forgot-password">Forgot Password</a>
  </div>
</body>
</html>