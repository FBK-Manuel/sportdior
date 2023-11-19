<?php include ("header.php");?>



 <div class="w3-container w3-card-2 w3-white">
 <form class="" action="" method="post">
   <h4 class="w3-padding w3-center" style="font-family: sanif;">Search For a Specific Title, Description
                        or Date time posted.</h4>
    <input class=" w3-center w3-padding w3-margin w3-border-bottom w3-border-0 w3-border-left w3-border-blue "
    type="text" name="value_search" placeholder="Searching for data on the database..."
   style="width: 90%;">
   <button type="submit" name="filter_btn" class="w3-btn w3-round-large w3-black w3-hover-blue"><i
                            class="fa fa-search"></i></button>
    </div>
</form>

<div class="w3-container w3-padding-16">
                <div class="w3-responsive">
                    <table class="w3-table-all">
                        <thead>
                            <tr class="w3-blue">
                                <td>Id</td>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Text Area</th>
                                <th>Date Time</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // create connection for the database
                            $connect = mysqli_connect('localhost', 'root', '', 'db_blog');

                            if (isset($_POST['filter_btn'])) {
                                // code...
                                $search = $_POST['value_search'];
                                $query = "SELECT * FROM articles WHERE CONCAT(title, description, datetime) LIKE '%$search%' ";
                                $query_run = mysqli_query($connect, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    // code...
                                    while ($row = mysqli_fetch_array($query_run)) {
                                        // code...

                            ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                                <td><?php echo $row["description"]; ?></td>
                                <td><?php echo $row["textarea"]; ?></td>
                                <td><?php echo $row["datetime"]; ?></td>
                                <td><img src="<?php echo "images/".$row['image'];?>" width ="100px" alt="image"> </td>
                                <form action="delete.php" method="post">
                             <td>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <input type="submit" name="delete" class='w3-btn w3-bar-block w3-red w3-round-large' value="Delete">
                            </td>
                            </tr>

                            <?php
                                    }
                                } else {
                                    ?>
                            <tr>
                                <td colspan="14">No Record Was Found...</td>
                            </tr>

                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            