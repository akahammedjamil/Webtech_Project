<?php
session_start();
if(count($_SESSION)===0){
  header("Location: logout.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <i><center><h1>Buyer DashBoard</h1></center></i>
     <center>
       <hr><hr>
       <form align="right" name="form1" method="post" action="../view/logout.php">

<input name="submit2" class="btn btn-info" type="submit" id="submit2" value="Logout">
</form>
       <a href="../view/home.php">
        <button class="btn btn-info">Home</button> </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../view/All_Products.php">
            <button  class="btn btn-info">Review All Products</button>
          </a>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../view/confirm2.php">
      <button class="btn btn-info" >Buy Products</button>
    </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../view/edit.php">
        <button class="btn btn-info" >Profile</button>
      </a>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../view/Cart.php">
        <button class="btn btn-info">Buyer Cart</button>
      </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="../view/changepassword.php">
            <button class="btn btn-info">Change Password</button>
          </a>
    </center>
<hr><hr>

  </body>
</html>
