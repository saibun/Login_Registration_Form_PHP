
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUP Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			require 'Connection.php';
			$user_email=$_POST['user_email'];
			$user_password=$_POST['user_password'];
			$user_name=$_POST['user_name'];
			$user_number=$_POST['user_number'];
			$user_gender=$_POST['gender'];
			$query1="SELECT * FROM user_maintain WHERE email='$user_email'OR password='$user_password'";
			$result1=mysqli_query($conn,$query1);
			//
			if($result1){
				$rowcount=mysqli_num_rows($result1);
				
				if($rowcount>0){
					echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
						  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
						  <div>
						    Email/Password Already exist!
						  </div>
						</div>';

				}else{
					$query2="INSERT INTO user_maintain (email,password,name,gender,numbers) VALUES ('$user_email','$user_password','$user_name','$user_gender','$user_number')";
					$result2=mysqli_query($conn,$query2);
					if($result2){
						
						echo'<div class="alert alert-success d-flex align-items-center" role="alert">
							  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
							  <div>
							    Sign Up Successfully.
							  </div>
							</div>';

					}else{
						echo $result;
					}


				}
			}
			

		}

	?>
	<!--
	<fieldset>
		<legend>Demo form just practice</legend>
		<form>
			<label>Email id:</label>
			<input type="email" name="email_id">
			<br><br>
			<label>Passoword:</label>
			<input type="password" name="password">
			<br>
			<br>
			<input type="submit" name="" value="Send">
			<input style="margin-left: 10px;"type="reset" name="">
		</form>
	</fieldset>
-->
	<div class="form-structure">
		<fieldset >
			<legend class="heading"><b>SignUp Form</b></legend>
			<form action="SignUp.php" method="POST">
				<div class="mb-3">
			    <label class="form-label"><b>Name</b></label>
			    <input type="text" class="form-control" name="user_name">
			  </div>


			  <div class="mb-3">
			    <label class="form-label"><b>Email</b></label>
			    <input type="email" class="form-control" name="user_email">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>

			  <div class="mb-3 gender_section">
			    <label  class="form-label"><b>Gender</b></label>
			    <input type="radio" name="gender" value="male"> Male
			    <input type="radio" name="gender" value="female"> Female
			    <input type="radio" name="gender" value="other"> Other
			  </div>


			  <div class="mb-3">
			    <label class="form-label"><b>Mobile</b></label>
			    <input type="tel" class="form-control"  name="user_number">
			  </div>


			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
			    <input type="password" class="form-control"  name="user_password">
			  </div>

			  <div class="button_section">
			  	<button type="submit" class="btn btn-lg btn-custom">Submit</button>
			  	<button type="reset" class="btn btn-lg btn-custom">Reset</button>
			  </div>
			  
			</form>
		</fieldset>
		
	</div>
	
	

</body>
</html>