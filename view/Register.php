<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #18ab9a;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	.error{
		color: red;
	}

</style>
<body>
<div class="row">

</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Sign Up To The System</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form name="signupForm" onsubmit="return validateForm()" action="" method="POST" >
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="First Name" name="fname">

					</div>
					<div class="error" id="fnameErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="text" class="form-control" placeholder="Last Name" name="lname">
					</div>
					<div class="error" id="lnameErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="email" class="form-control" placeholder="Email" name="email" >
					</div>
					<div class="error" id="emailErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input  type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="error" id="passwordErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<select class="form-control" name="country" >
							<option>Select your Country</option>
							<option>Bangladesh</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option>
						</select>
					</div>
					<div class="error" id="countryErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<select class="form-control input-md" name="gender">
							<option>Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						</select>
					</div>
					<div class="error" id="genderErr"></div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday">
					</div><br>
					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
         	<?php include("../controller/insert_buyer.php"); ?>
				</form><br><br>
				<form action="Buyer_Login.php" method="post">
               <center><button id="signup"  class="btn btn-info btn-lg" name="sign_up">Sign In</button></center>
            </form>
			</div>
		</div>
	</div>
</div>

<script src="./js/validate.js"></script>
</body>
<?php
		 include "../controller/footer.php";
		 ?>
</html>
