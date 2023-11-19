<?php include("../scroll-top.php"); ?>
<?php include("header.php"); ?>



<div class="w3-container">

    <div class="w3-container">
        <div class="w3-panel w3-white" style="width:50%">
            <p class="w3-xlarge w3-serif"><i>"Welcome To the visitors table"</i></p>
        </div>
    </div>

    <form action="" method="post"">
        <div class=" w3-responsive">
        <table class="w3-table-all">
            <tr class="w3-black">

                <th>Id</th>
                <th>Views</th>
                <th>Time Stamp</th>
                <th>Privacy</th>
            </tr>
            <?php include("adminconfig.php"); ?>
            <?php


            $query = "SELECT * FROM `visitors` ORDER BY id DESC ";
            $query_run = mysqli_query($db, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo "Visitors:&nbsp;" . $row['visit']; ?></td>
                    <td><?php echo  $row['timestamp']; ?></td>
                    <td>
                        <p class="w3-badge w3-blue">10</p>
                    </td>
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