<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "db_blog");


// If submit button is clicked ...
if (isset($_POST['submit'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $textarea = mysqli_real_escape_string($db, $_POST['textarea']);
  $longtextarea = mysqli_real_escape_string($db, $_POST['longtextarea']);
  $datetime = mysqli_real_escape_string($db, $_POST['datetime']);




  // image file directory
  $target = "images/" . basename($image);


  $sql = "INSERT INTO articles (title, description, textarea, longtextarea, datetime, image) VALUES ('$title', '$description', '$textarea', '$longtextarea', '$datetime', '$image')";
  // execute query
  mysqli_query($db, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo  "<script>window.alert('Uploaded Successfully');</script>";
    header('location: index.php');
  } else {
    echo "<script>window.alert('Post Uploading Failed');</script>";
    header('location:404.php');
  }
}
// update the status of the view for each post
if (isset($_REQUEST['id'])) {
  # code...
  $id = $_REQUEST['id'];
  $sql = ("UPDATE articles SET count = count + 1 WHERE id = '$id' ");
  mysqli_query($db, $sql);
}


// Retrieve the current visitor count for this post
// $res = $db->query("SELECT count FROM articles");
// $response = mysqli_fetch_assoc($result);


$result = mysqli_query($db, "SELECT * FROM articles ORDER BY id DESC");




if (isset($_REQUEST['id'])) {
  # code...
  $id = $_REQUEST['id'];

  $sql = "SELECT * FROM articles WHERE id = $id";
  $result = mysqli_query($db, $sql);
}
