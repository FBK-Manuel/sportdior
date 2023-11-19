<?php include ("header.php");?>



<div class="w3-container">

<div class="w3-container">
  <div class="w3-panel w3-white" style="width:50%">
    <p class="w3-xlarge w3-serif"><i>"Welcome To Subscribers List"</i></p>
  </div>
</div>

    <form action="" method="post" enctype="multipart/form-data">
<div class="w3-responsive">
<table class="w3-table-all">
<tr class="w3-black" >
  <th>Id</th>
  <th>Names</th>
  <th>E-mail</th>
  <th>Time-Stamp</th>
</tr>

<?php
$conn = mysqli_connect('localhost', 'root', '',);
$db = mysqli_select_db($conn,"db_blog");

$query = "SELECT * FROM `subscribe` ";
$query_run = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($query_run))
{
    ?>
<tr>
 <td><?php echo $row['id'];?></td>
 <td><?php echo $row['name'];?></td>
 <td><?php echo $row['email'];?></td>
 <td><?php echo $row['timestamp'];?></td>
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