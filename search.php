<?php include("headers.php"); ?>



<div class="w3-container w3-card-2 w3-white">
    <form class="" action="" method="post">
        <h4 class="w3-padding w3-center" style="font-family: sanif;">Search For Anything.</h4>
        <input class=" w3-center w3-padding w3-margin w3-border-bottom w3-border-0 w3-border-left w3-border-blue " type="text" name="value_search" placeholder="Searching for any data on our blog..." required style="width: 90%;">
        <button type="submit" name="filter_btn" class="w3-btn w3-round-large w3-black w3-hover-blue"><i class="fa fa-search"></i>Search</button>
</div>
</form>

<div class="w3-container w3-padding-16">
    <?php
    // create connection for the database
    $connect = mysqli_connect('localhost', 'root', '', 'db_blog');

    if (isset($_POST['filter_btn'])) {
        // code...
        $search = $_POST['value_search'];
        $query = "SELECT * FROM articles WHERE CONCAT(title, description) LIKE '%$search%' ";
        $query_run = mysqli_query($connect, $query);

        if (mysqli_num_rows($query_run) > 0) {
            // code...
            while ($row = mysqli_fetch_array($query_run)) {
                // code...
    ?>
                <?php echo $row["title"]; ?>
                <?php echo $row["description"]; ?>
                <a href="post.php?id=<?php echo $row['id'] ?>" class="w3-text-blue w3-hover-text-black" style="text-decoration:none;">Read...</a>
            <?php
            }
        } else {
            ?>
            <div class="w3-container" colspan="14"> No Record Was Found!!!...</div>
    <?php
        }
    }
    ?>
</div>
</div>