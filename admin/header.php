<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sportsdior</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="shortcut icon" href="images/logo/faviconee.png" sizes="32x32" type="images/x-icon">
    <script src="script.js"></script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>

<body>

    <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome.. <strong><?php echo $_SESSION['username']; ?></strong></p>
            <hr>
        <?php endif ?>
        <a href="index.php" class="w3-bar-item w3-button"><b>Add Post</b></a>
        <a href="article_table.php" class="w3-bar-item w3-button"><b>View Post</b></a>
        <a href="trending.php" class="w3-bar-item w3-button"><b>Add Trending Post</b></a>
        <a href="trendingtable.php" class="w3-bar-item w3-button"><b>View Trending Post</b></a>
        <a href="contact-table.php" class="w3-bar-item w3-button"><b>Contact List</b></a>
        <a href="viewCounter.php" class="w3-bar-item w3-button"><b>Total Traffic</b></a>
        <a href="subscribe_table.php" class="w3-bar-item w3-button"><b>Subscribers</b></a>
        <a href="notification-table.php" class="w3-bar-item w3-button"><b>Notification</b></a>
        <a href="search.php" class="w3-bar-item w3-button"><b>Search</b></a>
        <p><a href="index.php?logout='1'" class="w3-bar-item w3-button" style="color: red;">Log Out</a></p>


    </div>

    <div id="main">

        <div class="w3-blue">
            <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button>
            <?php if (isset($_SESSION['username'])) : ?>
                <p class="w3-right"></p>Welcome.. <strong class="w3-black w3-round-large w3-padding"><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
        </div>