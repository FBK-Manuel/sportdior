<?php include("../scroll-top.php"); ?>
<?php include("header.php"); ?>
<?php include("adminconfig.php"); ?>



<div class="w3-container">

    <div class="w3-container">
        <div class="w3-panel w3-white" style="width:50%">
            <p class="w3-xlarge w3-serif"><i>" Total trafic page and visitors for the year"</i></p>
        </div>
    </div>

    <form action="" method="post">
        <div class="w3-responsive">
            <table class="w3-table-all">
                <tr class="w3-black">

                    <th>Id</th>
                    <th>IP Address</th>
                    <th>User Agent</th>
                    <th>Datetime</th>
                </tr>

                <?php

                $sql = "SELECT * FROM counter";
                $res = mysqli_query($db, $sql);

                while ($row = mysqli_fetch_array($res)) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['ip_address']; ?></td>
                    <td><?php echo $row['user_agent']; ?></td>
                    <td><?php echo $row['datetimes']; ?></td>
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