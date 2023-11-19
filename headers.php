<!DOCTYPE html>
<html>
<title>Sportsdior</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="shortcut icon" href="images/logo/logo.png" sizes="32x32" type="images/x-icon">
<script src="assets/js/toggles.js"></script>

<style media="screen">
body,
h1,
h2,
h3,
h4,
h5 {
    font-family: "Raleway", sans-serif
}

#more {
    display: none;
}
</style>
</style>

<body class="w3-light-grey">

    <!-- navbar on smallscreens -->
    <div class="w3-sidebar w3-responsive w3-light-grey w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-block" onclick="w3_close()"><b style="color: black;"></b>
            Cancel &times;</button>
        <a href="index.php" class="w3-bar-item w3-button w3-margin w3-hover-text-blue"><i class=" fa fa-home"></i>
            Home</a>
        <a href="about.php" class="w3-bar-item w3-button w3-margin w3-text-black w3-hover-text-blue"> <i
                class="fa fa-users"></i>
            About Us</a><br>
        <a href="advert.php" class="w3-bar-item w3-button w3-margin w3-text-black w3-hover-text-blue"><i
                class="fa fa-industry"></i> Advertise</a><br>
        <a href="contact.php" class="w3-bar-item w3-button w3-margin w3-text-black w3-hover-text-blue"><i
                class="fa fa-book"></i>
            Contact</a>
        <a href="./admin/login.php" class="w3-bar-item w3-round-xlarge w3-blue w3-btn w3-block w3-hover-text-black"><i
                class="fa fa-user"></i>
            Admin</a><br>

    </div>

    <!-- navbar on full screen!!!! -->
    <div class="w3-container">
        <div id="main" class=" w3-display-container w3-animate-opacity">
            <!-- logo -->
            <div class="w3-large w3-margin">
                <button id="openNav" class="w3-button w3-right w3-hide-large w3-large"
                    onclick="w3_open()">&#9776;</button>

                <img src="images/ss.png" class="w3-bar-item" alt="Sportspodium" style="height:100px;">

                <a class="w3-right w3-btn w3-round-xlarge w3-hide-small w3-hide-medium w3-blue w3-bar-item w3-border-white"
                    href="./admin/login.php"><i class="fa fa-user"></i> Admin</a>

                <a class="w3-right w3-btn w3-text-blue w3-bar-item w3-border-blue" href="search.php"><i
                        class="fa fa-search"></i></a>
                <a href="advert.php"
                    class="w3-bar-item w3-btn w3-hide-small w3-hide-medium w3-right w3-text-black w3-hover-text-blue"><i
                        class="fa fa-industry"></i>
                    Advertise</a>
                <a href="contact.php"
                    class="w3-bar-item w3-btn w3-hide-medium w3-hide-small w3-right w3-text-black w3-hover-text-blue"><i
                        class="fa fa-book"></i>
                    Contact</a>
                <a href="about.php"
                    class="w3-bar-item w3-btn w3-hide-small w3-hide-medium w3-right w3-text-black w3-hover-text-blue"><i
                        class="fa fa-users"></i> About Us</a>
                <a href="index.php"
                    class="w3-bar-item w3-hide-small w3-hide-medium w3-btn w3-right w3-hover-text-black "><i
                        class="fa fa-home"></i>
                    Home</a>

            </div>
        </div>
    </div>


    <div class="w3-content" style="max-width:1400px">
        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>SPORTSDIOR</b></h1>
            <p>Welcome to <span class="w3-tag">Sportsdior.com</span></p>
        </header>