<?php include("admin/notify-config.php"); ?>

<?php
$results = mysqli_query($connect, "SELECT * FROM notify LIMIT 1");
foreach ($results as $row) { ?>

<div class="w3-container">
    <div class="w3-panel w3-leftbar w3-blue w3-round-xxlarge">
        <?php echo "<p><b><i>" . $row["notification"] . "</i></b></p>" ?>
    </div>
</div>
<?php } ?>