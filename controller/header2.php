<?php
session_start();
if(count($_SESSION)===0){
  header("Location: logout.php");
}
 ?>
<?php
include("../model/connection.php");
include("../controller/functions.php");
?>

	<style>
	body {
  color: white;
}
	nav.navbar-default {

	  top: 0;
	  background-color: #64FFF1;
	  padding: 40px;
	  font-size: 20px;
		color: white;
		border-radius: 30px;
	}
	
	</style>
	<body>
		<nav class="navbar navbar-default">
			<div id="re"class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="home.php">E-Commerce Website</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<center> 
			  <ul class="nav navbar-nav">
		<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from user where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row=mysqli_fetch_array($run_user);

		$user_id = $row['user_id'];
		$user_name = $row['user_name'];
		$first_name = $row['f_name'];
		$last_name = $row['l_name'];
	
		$user_pass = $row['user_pass'];
		$user_email = $row['user_email'];
		$user_country = $row['user_country'];
		$user_gender = $row['user_gender'];
		$user_birthday = $row['user_birthday'];
		$user_image = $row['user_image'];
	
		$recovery_account = $row['recovery_account'];
	

		?>  
		      
			    <li><a href="Home.php">Home</a></li>
					<li><a href="Buyer_Page.php">Buyer Page</a></li>
					<li><a href="Cart.php?u_id=new">Cart</a></li>
					<li><a href="edit.php">Edit Profile</a></li>
					<?php
							echo"

							<li class='dropdown'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
								<ul class='dropdown-menu'>
									
									<li role='separator' class='divider'></li>
									<li>
										<a href='changepassword.php'>Change Password</a>
									</li>
									<li role='separator' class='divider'></li>
									<li>
										<a href='logout.php'>Logout</a>
									</li>
								</ul>
							</li>
							";
						?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					
					</li>
				</ul>
</center>
			</div>
		</div>
	</nav>
  
	
