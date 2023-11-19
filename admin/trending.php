<?php include ("header.php");?>
<?php include ("trendingconfig.php");?>

<div class="w3-container">
    <h2 class="w3-text-blue w3-center"><b>What Is Trending</b></h2>
</div>
<div class="w3-container w3-light-grey">
    <form class="w3-container w3-card-4" enctype="multipart/form-data" action="" method="post">
        <p><input class="w3-input w3-border" name="title" type="text" placeholder="title of the post" required></p>
        <p><textarea class="w3-input w3-border" cols="40" rows="5" name="content" type="text"
                placeholder="Type your Article.." required></textarea></p>
        <p><input class="w3-border" type="file" id="img_div" src="image" name="image" alt="image" required></p>
        <p><button class="w3-btn w3-green w3-round-large" name="submit" type="submit">Post Trend</button></p>
    </form>
</div>







</div>
</body>

</html>