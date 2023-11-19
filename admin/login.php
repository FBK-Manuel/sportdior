<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Session (admin panel)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="w3-container w3-center ">
        <center>
            <div class=" w3-margin w3-text-blue w3-whitesmote w3-border w3-round-xxlarge" style="width: 50%;">
                <h2>Login Session</h2>

                <hr style="width: 50%">
                <form class="" method="post" action="login.php">

                    <div class="w3-padding">
                        <input class="w3-input w3-border w3-white w3-round-xlarge" style="width:70%" type="text"
                            value="<?php echo $username; ?>" placeholder="Username..." name="username" required>
                    </div>

                    <div class="w3-padding">
                        <input type="password" class="w3-input w3-border w3-white w3-round-xlarge" style="width:70%"
                            placeholder="Password..." name="password" required>
                    </div>
                    <div class="input-group">
                        <button type="submit" style="width: 30%"
                            class="w3-button w3-round-xlarge w3-border w3-blue w3-margin"
                            name="login_user">Login</button>
                    </div>

                </form>
            </div>
            <p class="w3-margin w3-padding">
                Admin only? <a class="w3-text-blue" style="text-decoration: none;" href="register.php">Sign
                    up</a>
                <br />
                Not an admin? <a class="w3-text-blue" style="text-decoration: none;" href="../index.php">Home</a>
            </p>
        </center>

    </div>

</body>

</html>