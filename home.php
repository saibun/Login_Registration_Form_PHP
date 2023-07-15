<?php 
	session_start();
	if(!isset($_SESSION['user_email'])){
		header('location: Login.php');
	}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
  	<div class="mt-5 text-center">
  		<h1>Wellcome, <?php echo $_SESSION['user_email'] ?></h1>
  	<button class=" btn btn-warning" ><a href= "Logout.php"style="text-decoration: none; color: inherit;">Log out</a></button>
  	</div>
  	
    
  </body>
</html>