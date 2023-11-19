<?php
// Check if the form is submitted
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'db_blog');

if (isset($_POST['delete'])) {
    # code...
    $id = $_POST['id'];

    $query = "DELETE FROM articles WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        # code...
        echo "<h4 class='w3-panel w3-pale-green w3-round-xlarge'>Data Deleted Successfully.</h4>";
        header("location:article_table.php");
    } else {
        echo 'Data Not Deleted';
    }
}

if (isset($_POST['delete-notice'])) {
    # code...
    $id = $_POST['id'];

    $sql = "DELETE FROM notify WHERE id='$id' ";
    $query_runs = mysqli_query($connection, $sql);

    if ($query_runs) {
        # code...
        echo "<h4 class='w3-panel w3-pale-green w3-round-xlarge'>Data Deleted Successfully.</h4>";
        header("location:notification-table.php");
    } else {
        echo 'Data Not Deleted';
    }
}