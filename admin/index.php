<?php
session_start();

if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
}
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
}
?>

<?php include("header.php"); ?>
<?php include("adminconfig.php"); ?>


<div class="w3-container">
        <h2 class="w3-text-blue w3-center"><b>Make a Post</b></h2>
</div>
<div class="w3-container w3-light-grey">
        <form class="w3-container w3-card-4" enctype="multipart/form-data" action="" method="post">
                <p><input class="w3-input w3-border" name="title" type="text" placeholder="title of the post" required></p>
                <p><input class="w3-input w3-border" name="description" type="text" placeholder="Short Description aboot the post.." required></p>
                <p><textarea class="w3-input w3-border" cols="40" rows="5" name="textarea" type="text" placeholder="Type your Article for the main page.." required></textarea></p>
                <article><textarea class="w3-input w3-border" cols="40" rows="5" name="longtextarea" type="text" placeholder="Insert all your content for the read more page..." required></textarea></article>
                <p><input type="text" class="w3-input w3-border" name="datetime" id="datetime" placeholder="E.g, 2023-01-01 Add your date you are posting this article" required></p>
                <p><input class="w3-border" type="file" id="img_div" src="image" name="image" alt="image"></p>
                <p><button class="w3-btn w3-blue w3-round-large" name="submit" type="submit">Post Article</button></p>
        </form>
</div>






<!-- logged in user information -->
<?php if (isset($_SESSION['username'])) : ?>
<?php endif ?>


</div>

<!-- <?php
        // while ($row = mysqli_fetch_array($result)) {
        //   echo "<div id='img_div'>";
        // echo "<img src='images/".$row['image']."' >";
        //   echo "<h2>".$row['title']."</h2>";
        //   echo "<h4>".$row['description']."</4>";
        //   	echo "<p>".$row['textarea']."</p>";
        //   	echo "<p>".$row['datetime']."</p>";
        //   echo "</div>";
        // }
        ?> -->
</body>

</html>