<!DOCTYPE html>
<html>
<title>Hackharik</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
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

<body class="w3-light-grey">

    <!-- navbar on smallscreens -->
    <div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left" style="display:none" id="mySidebar">
        <button class="w3-bar-item w3-button w3-large w3-block" onclick="w3_close()"><b style="color: whitesmoke;"></b>
            &times;</button>
        <a href="#" class="w3-item-bar w3-btn w3-bar-block w3-text-white w3-hover-text-blue"> <i
                class="fa fa-envelope"></i>About Us</a>
        <div class=" w3-dropdown-hover">
            <button class="w3-bar-item w3-button w3-hover-none w3-text-white w3-hover-text-blue"><i
                    class="fa fa-caret-down"></i> Login</button>
            <div class="w3-dropdown-content w3-bar-block">
                <a href="#" class="w3-bar-item w3-btn"><i class="fa fa-users"></i> User Login</a>
                <a href="#" class="w3-bar-item w3-btn"><i class="fa fa-user"></i> Admin Login</a>
            </div>
        </div>
        <a href="#" class="w3-item-bar w3-btn w3-bar-block w3-text-white w3-hover-text-blue"><i
                class="fa fa-bell"></i>Contact</a>

    </div>

    <!-- navbar on full screen!!!! -->
    <div class="w3-container"></div>
    <div id="main" class=" w3-display-container w3-animate-opacity w3-text-blue">
        <!-- logo -->
        <div class="w3-large">
            <button id="openNav" class="w3-button w3-right w3-hide-medium w3-hide-large w3-large"
                onclick="w3_open()">&#9776;</button>
            <a href="" class="w3-bar-item w3-button w3-hover-none w3-hide-small w3-border-black w3-hover-text-grey">
                <b>HackHarik Blog</b>
            </a>
            <a href="#" class="w3-bar-item w3-btn w3-hide-small w3-right w3-text-black w3-hover-text-blue"><i
                    class="fa fa-bell"></i>
                Contact</a>
            <a href="#" class="w3-bar-item w3-btn w3-hide-small w3-right w3-text-black w3-hover-text-blue"><i
                    class="fa fa-envelope"></i> About Us</a>
            <div class="w3-dropdown-hover w3-hide-small w3-right">
                <button class="w3-bar-item w3-btn w3-text-black w3-hover-none w3-hover-text-blue"><i
                        class="fa fa-sign-in"></i>
                    Login</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-btn"><i class="fa fa-users"></i> User Login</a>
                    <a href="#" class="w3-bar-item w3-btn"><i class="fa fa-user"></i> Admin Login</a>
                </div>
            </div>
            <a href="#" class="w3-bar-item w3-btn w3-right w3-hover-text-black "><i class="fa fa-home"></i>
                Home</a>
        </div>
    </div>
    </div>

    <div class="w3-content" style="max-width:1400px">



        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>MY BLOG</b></h1>
            <p>Welcome to the blog of <span class="w3-tag">HackHarik</span></p>
        </header>

        <h2 class="w3-left"><b>IT/Technologies</b></h2>

        <!-- Grid -->
        <div class="w3-row">


            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="images/app.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b>TITLE HEADING</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id
                            lorem
                            euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus
                            sed
                            ultricies mi non congue ullam corper</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="w3-button w3-padding-large w3-white"><b> <a class="w3-text-blue"
                                            style="text-decoration: none;" href="readmore1.php">
                                            READ MORE
                                            »</a></b></button>

                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b class="w3-text-blue"><a
                                                style="text-decoration: none;" href=""> <i class="fa fa-comment"></i>
                                                Comments
                                                 </a></b> <span class="w3-tag w3-blue w3-round-large">0</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="images/app2.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b>TITLE HEADING</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id
                            lorem
                            euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus
                            sed
                            ultricies mi non congue ullam corper.</span> </p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <button class="w3-button w3-padding-large w3-white"><b> <a class="w3-text-blue"
                                            style="text-decoration: none;" href="readmore2.php">
                                            READ MORE
                                            »</a></b></button>

                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b class="w3-text-blue"><a
                                                style="text-decoration: none;" href=""> <i class="fa fa-comment"></i>
                                                Comments Color Red
                                                 </a></b> <span class="w3-tag w3-blue w3-round-large">0</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>


                <!-- END BLOG ENTRIES -->


            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="images/profilez.jpg" style="width:100%">
                    <div class="w3-container w3-white">
                        <h3><b>HackHarik</b></h3>
                        <h5>Known Programming language</h5>
                        <p>
                            <i class="w3-tag">html</i>
                            <i class="w3-tag">w3-css framework</i>
                            <i class="w3-tag">JavaScript</i>
                            <i class="w3-tag">php</i>
                            <i class="w3-tag">python</i>
                            <i class="w3-tag w3-margin-top">Cyber Security</i>
                        </p>
                        <p>
                            I am a fullstack web developer and a Cyber Security expert, i work as a feelencer do mostly
                            of
                            whiteHart hacking.
                            In summary i find solution to helpless individual.
                        </p>
                    </div>
                </div>
                <hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Trending Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="images/app3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large"> <a style="text-decoration: none;" href="#">Lorem</a></span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="images/app4.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large"> <a style="text-decoration: none;" href="#">Lorem</a></span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="images/app5.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large"> <a style="text-decoration: none;" href="#">Lorem</a></span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="images/app6.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large"> <a style="text-decoration: none;" href="#">Lorem</a></span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h3>Follow Us Us On Socials</h3>
                    </div>
                    <div class="w3-container w3-white">
                        <i
                            class="fa fa-facebook-official w3-padding-16 w3-margin w3-hover-opacity w3-round-xxlarge w3-xlarge"></i>
                        <i
                            class="fa fa-instagram w3-hover-opacity w3-padding-16 w3-margin w3-round-xxlarge w3-xlarge"></i>
                        <i
                            class="fa fa-snapchat w3-hover-opacity w3-padding-16 w3-margin w3-round-xxlarge w3-xlarge"></i>
                        <i
                            class="fa fa-twitter w3-hover-opacity w3-padding-16 w3-margin w3-round-xxlarge w3-xlarge"></i>
                        <i
                            class="fa fa-linkedin w3-hover-opacity w3-padding-16 w3-margin w3-round-xxlarge w3-xlarge"></i>
                    </div>
                </div>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Our Niches</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Technology</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cyber Crime</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Computer Science</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cyber Security</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ethical Hacking</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Web Developer</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Software Engineer</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Data Analysis</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Graphics Designing</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Animation</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ui & Ux Designing</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Video Editor</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Photo manupulation</span> <span
                                class="w3-tag w3-light-grey w3-small w3-margin-bottom">Cyber Threat</span>
                        </p>
                    </div>
                </div>

                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Subsribe To Our Mailing List.</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'"
                                class="w3-button w3-block w3-blue">Subscribe</button></p>
                    </div>


                </div>

                <!-- Subscribe Modal -->
                <?php
                // require 'db.php';
                // if ( !empty($_SESSION['id'])) {
                //     header('location:index.php');
                // }
                // if (empty($_POST['email'])) {
                //     # code...
                //     $emailErr = "Email is required for this field.";
                // }
                // else {
                //     # code...
                //     $emailing = test_input ($_POST["email"]);
                //     // checking if email is formed
                // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //         # code...
                //         $emailErr = "invalid email format.";
                //     }
                // }

                // if (isset($_POST["submit"])) {
                //     # code...
                //     $mailing = $_POST["email"];
                //     $config = mysqli_query($conn, "SELECT * FROM tb_blog WHERE email ='$mailing'");

                //     if (mysqli_num_rows($config) > 0) {
                //         # code...
                //         echo
                //         "<script> alert('Email Already Existing.');</script>";
                //     }

                //     else {
                //         # code...
                //         $query = "INSERT INTO tb_blog VALUES('', '$mailing',)";
                //         mysqli_query($conn, $query);
                //         echo
                //         "<script> alert('Email Address Saved Successfully.');</script>";
                //     }
                // }
                ?>
                <div id="subscribe" class="w3-modal w3-animate-opacity">
                    <form action="" method="post">
                        <div class="w3-modal-content" style="padding:32px">
                            <div class="w3-container w3-white">
                                <i onclick="document.getElementById('subscribe').style.display='none'"
                                    class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
                                <h2 class="w3-wide">SUBSCRIBE</h2>
                                <p>Join our mailing list to receive updates on the latest blog posts.</p>

                                <p><input class="w3-input w3-border" type="text" value="<?php echo $email;?>" id="email"
                                        name="email" placeholder="Enter e-mail..."></p>
                                <button type="submit" name="submit"
                                    class="w3-button w3-block w3-padding-large w3-blue w3-margin-bottom"
                                    onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>
        <div class="w3-center">
            <div class="w3-bar">
                <a href="#" class="w3-button">&laquo;</a>
                <a href="#" class="w3-button w3-blue w3-round-large">1</a>
                <a href="#" class="w3-button">2</a>
                <a href="#" class="w3-button">3</a>
                <a href="#" class="w3-button">4</a>
                <a href="#" class="w3-button">5</a>
                <a href="#" class="w3-button">&raquo;</a>
            </div>
        </div>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-row-padding w3-dark-grey w3-padding-26">
        <!-- center content -->
        <div class="w3-quarter">
            <h1>HACKHARIK BLOG</h1>
            <p>one of the best blog on the internet today that gives you latest content and updated news on the web
                world today.</p>
        </div>
        <div class="w3-quarter w3-hoverable">
            <h3>Social Medias</h3>
            <h5>Facebook</h5>
            <h5>Twitter</h5>
            <h5>LinkIn</h5>
            <h5>Instagram</h5>
            <h5>Whatsapp</h5>
        </div>
        <div class="w3-quarter">
            <h4>CONTACT</h4>
        </div>
        <div class="w3-quarter">
            <h4>Advertisment</h4>
        </div>



        <!-- <div class="w3-container w3-xlarge w3-center">
            <i class="fa fa-facebook-official w3-hover-opacity w3-round-xlarge"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-round-xlarge"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-round-xlarge"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-round-xlarge"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-round-xlarge"></i>
            <h5>Copyright <i class="w3-text-blue" style="font-family: sanif;">2023,</i> alright reserved</h5>

            <h5>
                Design by <a class="w3-text-blue" style="font-family: sanif;" href="https://hackharik.com">HackHarik</a>
            </h5>
        </div>
        </div> -->
    </footer>

</body>


</html>



<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function w3_open() {
    document.getElementById("main").style.marginLeft = "50%";
    document.getElementById("mySidebar").style.width = "50%";
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}

function w3_close() {
    document.getElementById("main").style.marginLeft = "0%";
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
}
</script>
<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();

function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "&#10003; Liked";
}
</script>