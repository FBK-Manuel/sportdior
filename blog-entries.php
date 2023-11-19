<?php include("admin/adminconfig.php"); ?>



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
            <?php echo "<h5>" . $row['date'] . "</5>"; ?> |
            <p class="w3-opacity">Posted by <i class="w3-text-green">admin</i></p> |
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

        </div>

        <!-- articles -->
        <div class="w3-container">
            <?php echo "<p>" . $row['textarea'] . "</p>"; ?>
            <div class="w3-row">
                <div class="w3-col m8 s12">

                    <button class="w3-button w3-margin w3- padding-large w3-light-grey w3-round-xlarge"><b> <a
                                class="w3-text-blue" style="text-decoration: none;"
                                href="post.php?id=<?php echo $row['id'] ?>">
                                READ MORE»</a>
                        </b></button>


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