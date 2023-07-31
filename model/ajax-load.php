<?php

$conn = mysqli_connect("localhost","root","","buyer1") or die("Connection Failed");

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">ProductId</th>
                <th>Name And Details</th>
                <th width="90px">Edit</th>
               
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["p_id"]}</td><td>{$row["p_name"]} {$row["p_details"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["p_id"]}'>Edit</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
