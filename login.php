<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Login
-->

<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <header>
        <nav>
            <img src="logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
            <h1>Ace in the Hole Multisport</h1>
            <div class="nav">
                <label class="menuIcon" for="toggle">&#9776;</label>
                <input type="checkbox" id="toggle">
                <div class="menu">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact</a>
                    <a href="#">Events</a>
                    <a href="#">About Us</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">

            <div class="header">
                <h2>Log In</h2>
            </div>

            <form action="login.php" method="post">

                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password_1" required>
                </div>

                <button type="submit" name="login_user"> Log In </button>

                <p>Not a user? <a href="register.php">Register Here</a></p>

            </form>

        </div>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
