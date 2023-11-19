<?php include("admin/adminconfig.php"); ?>
<?php include("admin/counter.php"); ?>
<?php include "headers.php"; ?>



<h2 class="w3-left w3-padding"><b><a href="" class="w3-text-blue" style="text-decoration: none;"> Home</a> >
        Read More</b></h2>
<!-- Grid -->
<div class="w3-row">
    <!-- Blog entries -->
    <div class="w3-col l8 s12">



        <!-- post 1 -->
        <!--Start Blog entry  -->
        <section id="post1-section">
            <?php foreach ($result as $row) { ?>
            <div class="w3-card-4 w3-margin w3-white">
                <!-- images -->
                <img src="<?php echo "./admin/images/" . $row['image']; ?>" width="100%" alt="image">
                <!-- write ups -->
                <div class="w3-container">
                    <?php echo "<h4 style='font-family:Verdana;'><b>" . $row['title'] . "</b></h4>"; ?>
                    <?php echo "<h5>" . $row['description'] . "</5>"; ?>
                    <?php echo "<h5>" . $row['date'] . "</5>"; ?> | <span class="w3-opacity">
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
                        <?php echo $_SESSION['views'] . 'views' ?>
                    </span>

                </div>
                <!-- articles -->
                <div class="w3-container">
                    <?php echo "<p>" . $row['longtextarea'] . "</p>"; ?>
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

        </section>
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