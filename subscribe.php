<?php
if (isset($_POST['submit'])) {
    # Create database connection...
    require 'connfig.php';

    $name = mysqli_real_escape_string($connfig, $_POST['name']);
    $email = mysqli_real_escape_string($connfig, $_POST['email']);

    //Here is sql syntex
    $sql = "INSERT INTO subscribe (name, email) VALUES ('$name', '$email')";

    $result = mysqli_query($connfig, $sql);

    if (!$result) {
        # code...
        die('Could not post data!' . 'mysqli_query()');
    }else {
        echo "<script>alert('Thanks for subscribing to our mailing list.')</script>";
        header('Location:thanks.php');
        exit();
    }
}
