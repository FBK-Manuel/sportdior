<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration System (Admin Panel)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="w3-container w3-center ">
        <center>
            <div class=" w3-margin w3-text-blue w3-whitesmote w3-border w3-round-xxlarge" style="width: 50%;">
                <h2>Registration Session</h2>

                <hr style="width: 50%">
                <form class="" method="post" action="register.php">

                    <div class="w3-padding">
                        <input class="w3-input w3-border w3-white w3-round-xlarge" style="width:70%" placeholder="Username..." type="text" name="username" value="<?php echo $username; ?>" required>
                    </div>

                    <div class="w3-padding">
                        <input class="w3-input w3-border w3-white w3-round-xlarge" style="width:70%" placeholder="Email..." type="email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="w3-padding">
                        <input class="w3-input w3-border w3-white w3-round-xlarge" placeholder="Password..." style="width:70%" type="password" name="password_1" required>
                    </div>

                    <div class="w3-padding">
                        <input class="w3-input w3-border w3-white w3-round-xlarge" placeholder="Confirm Password..." style="width:70%" type="password" name="password_2" required>
                    </div>
                    <!-- <div class="w3-padding">
                        <button style="width: 30%" class="w3-button w3-round-xlarge w3-border w3-blue w3-margin"
                            type="submit" class="btn" name="reg_user">Register</button>
                    </div> -->

                </form>
            </div>
            <p>
                Already an admin? <a class="w3-text-blue" style="text-decoration: none;" href="login.php">Sign In</a>
            </p>

            <div>
                <p>this page is currently unavailable for certain users... <a style="text-decoration: none; color: blue;" href="../index.php">try again</a></p>
            </div>
        </center>

    </div>

</body>

</html>