<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS Portal</title>
    
</head>
<style>
  /* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 24px;
}

.navbar {
    list-style: none;
    display: flex;
}

.navbar li {
    margin-right: 20px;
}

.navbar a {
    text-decoration: none;
    color: #fff;
}

.user-info {
    display: flex;
    align-items: center;
}

.user-info a {
    margin-left: 20px;
    color: #fff;
}

main {
    display: flex;
    max-width: 1200px;
    margin: 20px auto;
    padding: 0 20px;
}

.info-box {
    flex: 1;
    margin-right: 20px;
    padding: 60px;
    background-color: silver;
    border-radius: 5px;
    padding-bottom:20px;
}

.user-profile {
    display: flex;
    align-items: center;
}

.user-profile img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-right: 20px;
}

.sidebar {
    flex-basis: 200px;
    background-color: #333;
    color: #fff;
    padding: 20px;
    border-radius: 5px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar li {
    margin-bottom: 10px;
}

.sidebar a {
    text-decoration: none;
    color: #fff;
}

@media (max-width: 768px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    .navbar {
        margin-top: 20px;
    }

    .user-info {
        flex-direction: column;
        align-items: flex-start;
        margin-top: 20px;
    }

    .user-info a {
        margin-left: 0;
        margin-top: 10px;
    }

    main {
        flex-direction: column;
    }

    .info-box {
        margin-right: 0;
        margin-bottom: 20px;
    }

    .sidebar {
        flex-basis: 100%;
        margin-top: 20px;
    }
}

</style>
<body>
    <header>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="user-info">
                <a href="#">change password</a>
                <a href="login.php">Sign Out</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="info-box">
            <div class="user-profile">
                <img src="images\pic.jpg" alt="User's Profile Image">
                <div class="user-details">
                <span>Welcome,<br> [Username]</span>
                </div>
            </div>
        </section>
        <aside class="sidebar">
            <ul>
                <li><a href="subjects.php">Subjects</a></li>
                <li><a href="attendence.php">Attendance</a></li>
                <li><a href="circular.php">Circular</a></li>
                <li><a href="library.php">Library</a></li>
                <li><a href="leave.php">Leave History</a></li>
                <li><a href="payslips.php">Pay Slips</a></li>
            </ul>
        </aside>
    </main>
</body>
</html>
