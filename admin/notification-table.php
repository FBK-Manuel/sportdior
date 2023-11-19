<?php include("header.php"); ?>
<?php include("notify-config.php"); ?>


<div class="w3-container w3-card-2 w3-center w3-white">
    <h2>Tell your audience about the new developement of your blog.</h2>
    <form method="post">
        <p><input class="w3-input w3-border" name="notification" type="text" placeholder="Notification message..."
                required></p>

        <button type="submit" name="submit" class="w3-btn w3-round-large w3-margin w3-black w3-hover-blue"><i
                class="fa fa-envelope"></i> Submit</button>
</div>
</form>

<div class="w3-container w3-padding-16">

    <div class="w3-responsive">
        <table class="w3-table-all">
            <thead>
                <tr class="w3-blue">
                    <td>Id</td>
                    <th>Notification</th>
                    <th>Time Stamp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($result as $row) {  ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["notification"]; ?></td>
                    <td><?php echo $row["time"]; ?></td>
                    <form action="delete.php" method="post">
                        <td>
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="delete-notice" class='w3-btn w3-bar-block w3-red w3-round-large'
                                value="Delete-notice">
                        </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>