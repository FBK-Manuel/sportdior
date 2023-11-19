<?php include("admin/trendingconfig.php"); ?>

<!-- Introduction menu -->
<div class="w3-col l4">
    <!-- About Card -->
    <div class="w3-card w3-margin w3-margin-top">
        <img src="images/logo/backg.png" style="width:100%">
        <div class="w3-container w3-white">
            <h3><b>SPORTSDIOR</b></h3>
            <h5>Home of Sports, entertainment.</h5>
            <p>
                <i class="w3-tag w3-center">LOVER OF FOOTBALL</i>



            </p>
            <p>
                In recent years, sports has become increasingly popular event. There are now many sports blogging sites
                on the internet today, providing fans with news, analysis, and <a href="about.php" class="w3-text-blue"
                    style="text-decoration: none;">Read More...</a>
            </p>
        </div>
    </div>
    <hr>
    <?php include("admin/trendingconfig.php"); ?>
    <!-- Posts -->
    <div class="w3-card w3-margin">
        <h4>Trending Posts</h4>
        <?php foreach ($result as $row) { ?>
        <div class="w3-container w3-padding">

        </div>
        <ul class="w3-ul w3-hoverable w3-white">
            <li class="w3-padding-16">
                <!-- image -->
                <?php echo "<img style='width:50px'class='w3-left w3-margin-right' src='./admin/images/" . $row['image'] . "' >"; ?>
                <!-- <img src="images/Hakimi.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px"> -->
                <span class="w3-large"> <a style="text-decoration: none;"
                        href="#"><?php echo "<h4>" . $row['title'] . "</h4>"; ?></a></span><br>
            </li>
        </ul>
        <?php } ?>
    </div>
    <hr>


    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h3>Follow Us On Our Socials</h3>
        </div>
        <div class="w3-container w3-white">
            <i
                class="fa fa-facebook-official w3-padding-16 w3-margin w3-hover-opacity w3-text-blue w3-round-xxlarge w3-large"></i><a
                style="text-decoration: none;" class="w3-text-blue"
                href="https://www.facebook.com/groups/259584382122208/?ref=share&mibextid=S66gvF">facebook</a>
            <i
                class="fa fa-instagram w3-text-brown w3-hover-opacity w3-padding-16 w3-margin w3-round-xxlarge w3-large"></i><a
                style="text-decoration: none;" class="w3-text-grey"
                href="https://www.instagram.com/sportsdior247/">Instagram</a>
            <i
                class="fa fa-youtube w3-hover-opacity w3-text-red w3-padding-16 w3-margin w3-round-xxlarge w3-large"></i><a
                style="text-decoration: none;" class="w3-text-red"
                href="https://www.youtube.com/channel/UCKcxDSbsC4im1hGrDp6j1Hg">YouTube</a>
        </div>
    </div>


    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Subsribe To Our Mailing List.</h4>
        </div>


        <!-- Subscribe Modal -->
        <div id="subscribe" class="w3-container w3-white w3-padding">
            <form action="subscribe.php" method="post" class="w3-container w3-padding ">
                <!-- <label for="Name">Name</label> -->
                <input class="w3-input w3-border-blue w3-margin w3-margin-bottom w3-padding" type="text" name="name"
                    placeholder="Enter Name..." required>
                <!-- <label for="email">E-mail</label> -->
                <input class="w3-input w3-border-blue w3-margin w3-padding w3-margin-button" type="email" name="email"
                    id="" placeholder="Enter E-mail..." required>
                <input class="w3-button w3-blue w3-margin w3-round-xlarge w3-padding w3-margin-bottom"
                    style="width:100%" type="submit" name="submit" value="submit">

            </form>
        </div>
    </div>


    <!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>
<!-- END w3-content -->


<!-- Button to navigate to the post -->
<!-- <button id="go-to-post-button">Go to Post</button> -->

<!-- Section containing the post -->
<!-- <section id="post-section">
  <h2>Post Title</h2>
  <p>Post content goes here...</p>
</section> -->

<!-- <script>
document.addEventListener('DOMContentLoaded', function() {
  const goToPostButton = document.getElementById('go-to-post-button');
  goToPostButton.addEventListener('click', function() {
    const postSection = document.getElementById('post-section');
    postSection.scrollIntoView({ behavior: 'smooth' });
  });
});
</script> -->