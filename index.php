<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Template
-->

<?php

session_start();

if(isset($_SESSION['username'])){

    $_SESSION['msg'] = "You must log in before viewing this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){

    session_destroy();
    unset($_SESSION['username']);
    header("location : login.php");
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Ace in the Hole Multisports</title>
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
        <?php
        if(isset($_SESSION['success'])) : ?>

        <div>
            <h3>
                <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
            </h3>
        </div>
        <?php endif ?>

        //if the user logs in display page

        <?php if(isset($_SESSION['username'])) : ?>

        <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>

        <button><a href="index.php?logout='1'"></a></button>
        <?php endif ?>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
