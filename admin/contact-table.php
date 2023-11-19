<?php include("header.php"); ?>



<div class="w3-container">

    <div class="w3-container">
        <div class="w3-panel w3-white" style="width:50%">
            <p class="w3-xlarge w3-serif"><i>"Welcome To Contact List"</i></p>
        </div>
    </div>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr class="w3-black">
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>Date-Time</th>
                </tr>

                <?php
        $conn = mysqli_connect('localhost', 'root', '',);
        $db = mysqli_select_db($conn, "db_blog");

        $query = "SELECT * FROM `contact` ";
        $query_run = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_array($query_run)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first']; ?></td>
                    <td><?php echo $row['last']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['datetime']; ?></td>
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