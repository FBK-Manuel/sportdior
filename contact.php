<?php
if (isset($_POST['submit'])) {
    # Create database connection...
    require 'connfig.php';

    $Fname = mysqli_real_escape_string($connfig, $_POST['first']);
    $Lname = mysqli_real_escape_string($connfig, $_POST['last']);
    $email = mysqli_real_escape_string($connfig, $_POST['email']);
    $phone = mysqli_real_escape_string($connfig, $_POST['phone']);
    $msg = mysqli_real_escape_string($connfig, $_POST['message']);

    //Here is sql syntax
    $sql = "INSERT INTO contact (first, last, email, phone, message) VALUES ('$Fname', '$Lname', '$email', '$phone', '$msg')";

    $result = mysqli_query($connfig, $sql);

    if (!$result) {
        # code...
        die('Could not post data!' . 'mysqli_query()');
    } else {
        echo "<script> window.alert('Thanks for contacting us, we get back to u as soon as possible.')</script>";
        header('Location:thanks.php');
        exit();
    }
}

?>

<?php include("headers.php"); ?>

<h2 class="w3-left w3-padding"><b><a href="index.php" class="w3-text-blue" style="text-decoration: none;"> Home</a> >
        Contact</b></h2>

<!-- Grid -->
<div class="w3-row">

    <!-- contact section -->

    <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
        <h2 class="w3-center">Contact Us</h2>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="first" type="text" placeholder="First Name" required>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name" required>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="text" placeholder="Email" required>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone" required>
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
                <textarea class="w3-input w3-border" name="message" type="text" placeholder="Message..."></textarea>
            </div>
        </div>
        <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-margin-left" name="submit"
            style="width:99%;">Send</button>


    </form>
</div>
<?php include "footers.php"; ?>
</body>

</html>