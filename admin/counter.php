<?php
// Establish a database connection
include("adminconfig.php");

// Retrieve the post ID (you can pass this as a parameter to your script)
// Increment the visitor count for this post
$sql = ("UPDATE visitors SET visit = visit + 1 ");
mysqli_query($db, $sql);

// Retrieve the current visitor count for this post
$result = $db->query("SELECT visit FROM visitors");
$row = $result->fetch_assoc();
// $visitorCount = $row['visit'];


// Close the database connection
$db->close();
