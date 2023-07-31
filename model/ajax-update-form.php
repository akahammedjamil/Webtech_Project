<?php

$student_id = $_POST["id"];
$firstName = $_POST["first_name"];
$lastName = $_POST["last_name"];

$conn = mysqli_connect("localhost","root","","buyer1") or die("Connection Failed");

$sql = "UPDATE product SET p_name = '{$firstName}', p_details = '{$lastName}' WHERE p_id = {$student_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>
