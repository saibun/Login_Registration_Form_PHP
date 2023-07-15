
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LogIn Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<?php 
		if($_SERVER["REQUEST_METHOD"]=="POST"){
				require 'Connection.php';
				$user_email=$_POST['user_email'];
				$user_password=$_POST['user_password'];
				$query="SELECT * FROM user_maintain WHERE email='$user_email'AND password='$user_password'";
				$result=mysqli_query($conn,$query);
				$rowcount=mysqli_num_rows($result);
				if($rowcount>0){
					session_start();
					$_SESSION['user_email']=$user_email;
					header("location:home.php");
				}else{
					echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
						  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
						  <div>
						    Wrong credentials!
						  </div>
						</div>';
				}
			}
	?>


	<fieldset style="padding: 20px;">
		<div>
			<legend>LogIn Form</legend>
			<form action="Login.php" method="POST">
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_email">
			    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputPassword1" class="form-label">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="user_password">
			  </div>
			  <button type="submit" class="btn btn-secondary" style="width:100%">Send</button>
			
		</div>
		
		  
		</form>
	</fieldset>
	

</body>
</html>