<?php include("admin/adminconfig.php"); ?>
<?php include "headers.php"; ?>


<h2 class="w3-left w3-padding"><b><a href="" class="w3-text-blue" style="text-decoration: none;"> Home</a> >
        Read More</b></h2>
<!-- Grid -->
<div class="w3-row">
    <!-- Blog entries -->
    <div class="w3-col l8 s12">

        <!-- post 1 -->
        <!--Start Blog entry  -->
        <article id="post1-section">
            <?php foreach ($result as $row) { ?>
            <div class="w3-card-4 w3-margin w3-white">
                <!-- images -->
                <img src="<?php echo "./admin/images/" . $row['image']; ?>" width="100%" alt="image">
                <!-- write ups -->
                <div class="w3-container">
                    <?php echo "<h4 style='font-family:Verdana;'><b>" . $row['title'] . "</b></h4>"; ?>
                    <?php echo "<h5>" . $row['description'] . "</5>"; ?>
                    <?php echo "<h5>" . $row['date'] . "</h5>"; ?>

                    <span class="w3-opacity">
                        <?php
                            $post_time = $row['date']; // Replace this with the actual time the post was created
                            $current_time = date("Y-m-d H:i:s");
                            $time_diff = date_diff(date_create($post_time), date_create($current_time));

                            if ($time_diff->y > 0) {
                                echo $time_diff->y . " years ago";
                            } elseif ($time_diff->m > 0) {
                                echo $time_diff->m . " months ago";
                            } elseif ($time_diff->d > 0) {
                                echo $time_diff->d . " days ago";
                            } elseif ($time_diff->h > 0) {
                                echo $time_diff->h . " hours ago";
                            } elseif ($time_diff->i > 0) {
                                echo $time_diff->i . " minutes ago";
                            } else {
                                echo "a few seconds ago";
                            }
                            ?>

                    </span>
                    <?php echo "<span class='w3-opacity w3-right' ><i class='fa fa-eye'></i> Views &nbsp;" . $row['count'] . "</span>"; ?>
                </div>



                <!-- ______________________________this for share button_______________________________________________________________________________________ -->
                <?php
                    // Get the current URL in PHP and title
                    $url = "https://sportdior.com/post.php?id=98";
                    $text = "hello from sport dior";
                    $postURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $title =  $row['title'] . " Read More... ";
                    // define social media platforms
                    $facebook = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($postURL);
                    $whatsapp = 'https://api.whatsapp.com/send?text=' . urlencode($title) . urlencode($postURL);
                    $linkedin = 'https://www.linkedin.com/shareArticle?url=' . urlencode($postURL) . '&title=' . urlencode($title);
                    $twitter = 'https://twitter.com/share?url=' . urlencode($postURL) . '&text=' . urlencode($title);
                    ?>
                <div class="share-btn">
                    <a href="<?php echo $facebook; ?>" target="_blank">
                        <i class="fa fa-facebook-square w3-animate-top"></i>
                    </a>
                    <a href="<?php echo $whatsapp; ?>" target="_blank">
                        <i class="fa fa-whatsapp w3-animate-right"></i>
                    </a>
                    <a href="<?php echo $linkedin; ?>" target="_blank">
                        <i class="fa fa-linkedin-square w3-animate-left"></i>
                    </a>
                    <a href="<?php echo $twitter; ?>" target="_blank">
                        <i class="fa fa-twitter-square w3-animate-bottom"></i>
                    </a>
                </div>
                <!-- _________________________ended here_______________________________________________________________________________________ -->



                <!-- articles -->
                <div class="w3-container">
                    <?php echo "<h6>" .  nl2br($row['longtextarea']) . "</h6>"; ?>
                    <div class="w3-row">
                        <div class="w3-col m8 s12">
                        </div>
                        <div class="w3-col m4">
                            <div class="w3-container w3-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </article>
        <hr>
        <!-- End blog entry-->
    </div>

    <!-- do not touch from here below -->
    <!-- side-contents of the Blog -->
    <?php include "side-content.php"; ?>
</div>
</div>
<?php include "scroll-top.php"; ?>
<!-- Footer -->
<?php include "footers.php"; ?>
</body>

</html>