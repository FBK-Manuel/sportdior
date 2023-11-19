<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_blog");


  // If submit button is clicked ...
  if (isset($_POST['submit'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
    $title = mysqli_real_escape_string($db, $_POST['title']);
  	$content = mysqli_real_escape_string($db, $_POST['content']);

  	// image file directory
  	$target = "images/".basename($image);
    

  	$sql = "INSERT INTO trending (title, content, image) VALUES ('$title', '$content', '$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		 echo  "<script>window.alert('Uploaded Successfully');</script>";
        header('location: trending.php');
  	}else{
  		echo "<script>window.alert('Post Uploading Failed');</script>";
        header('location:404.php');
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM trending");
?>