<?php include("../scroll-top.php"); ?>
<?php include("header.php"); ?>



<div class="w3-container">

    <div class="w3-container">
        <div class="w3-panel w3-white" style="width:50%">
            <p class="w3-xlarge w3-serif"><i>"Welcome To Article Content"</i></p>
        </div>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr class="w3-black">

                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>TextArea</th>
                    <th>Read More</th>
                    <th>DateTime</th>
                    <th>Views</th>
                    <th>TimeStamp</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                <?php

                $conn = mysqli_connect('localhost', 'root', '',);
                $db = mysqli_select_db($conn, "db_blog");

                $query = "SELECT * FROM `articles`  ";
                $query_run = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($query_run)) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['textarea']; ?></td>
                        <td><?php echo $row['longtextarea']; ?></td>
                        <td><?php echo $row['datetime']; ?></td>
                        <td><?php echo $row['count']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><img src="<?php echo "images/" . $row['image']; ?>" width="100px" alt="image"> </td>


                        <form action="delete.php" method="post">
                            <td>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="submit" name="delete" class='w3-btn w3-bar-block w3-red w3-round-large' value="Delete">
                            </td>
                        </form>
                    </tr>

                <?php
                }
                ?>


            </table>
        </div>
    </form>
</div>



</div>
</body>

</html>