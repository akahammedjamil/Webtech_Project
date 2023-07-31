<?php
//delete.php
$connect = mysqli_connect("localhost", "root", "", "buyer1");
if(isset($_POST["id"]))
{
 foreach($_POST["id"] as $id)
 {
  $query = "DELETE FROM product WHERE p_id = '".$id."'";
  mysqli_query($connect, $query);
 }
}
?>
