<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Registration & Login
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
    <title>Register</title>
</head>

<body>
    <header>
        <nav>
            <img src="logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
            <h1>Ace in the Hole Multisport</h1>
            <div class="nav">
                <label for="toggle">&#9776;</label>
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
                <h2>Register</h2>
            </div>

            <form action="register.php" method="post">

                <?php include('errors.php') ?>

                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label for="email">e-mail: </label>
                    <input type="email" name="email" required>
                </div>

                <div>
                    <label for="password">Password: </label>
                    <input type="password" name="password_1" required>
                </div>

                <div>
                    <label for="password">Confirm Password: </label>
                    <input type="password" name="password_2" required>
                </div>

                <button type="submit" name="reg_user"> Submit </button>

                <p>Already a user? <a href="login.php">Log in</a></p>

            </form>

        </div>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
