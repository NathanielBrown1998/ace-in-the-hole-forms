<!--
    Project: Ace in the Hole Multisports
    Author: Nathaniel Brown
    02/07/2021
    Purpose: Contact Form
-->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>

<body>
    <header>
        <nav>
            <img src=" logo.png" alt="Ace in the Hole Multisport Logo" width="240" height="69">
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

    <main id="contact-style">
        <div class="contact-title">
            <h2>Hello</h2>
            <h3>We are always ready to help</h3>
        </div>

        <div class="contact-form">
            <form id="contact-form" method="post" action="">
                <input name="name type" text class="form-control" placeholder="Your Name" required>
                <br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                <br>

                <textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea>
                <br>

                <input type="submit" class="form-control submit" value="SEND MESSAGE">

                <select id="athlete" name="athlete">
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="interested">Interested Party</option>
                </select>
            </form>
        </div>
    </main>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>

</html>
