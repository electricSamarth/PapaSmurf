<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
	<?php
	if (isset($_POST['create'])){
		$firstname	=$_POST['firstname'];
		$lastname	=$_POST['lastname'];
		$email 		=$_POST['email'];
		$gamerid	=$_POST['gamerid'];
		$password 	=$_POST['password'];

		$sql="INSERT INTO users (firstname,lastname,email,gamerid,password) VALUES (?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result=$stmtinsert->execute([$firstname,$lastname,$email,$gamerid,$password]);
		if($result){
			echo "<span style="color:white";> Successfully saved. </span>";
		}else{
			echo "<span style="color:white";> There was error while saving the data </span>";
		}
				
	}
	?>
	</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h1> Registration</h1>
					<p>Fill Up the form </p>
					
					<hr class="mb-3">

					<label for ="firstname"><b> First Name</b> </label> 
					<input class ="form-control"  type="text" name="firstname" required>
					

					<label for ="lastname"><b> Last Name</b> </label> 
					<input class ="form-control"  type="text" name="lastname" required>
					

					<label for ="email"><b> Email</b> </label> 
					<input class ="form-control"  type="email" name="email" required>
					

					<label for ="gamerid"><b> GamerId</b> </label> 
					<input type="text" class ="form-control"  name="gamerid" required>


					<label for ="password"><b>Password</b> </label> 
					<input type="password" class ="form-control"  name="password" required>
					
					<hr class="mb-3">
					
					<input type="submit" name="create" value="Sign Up" class="btn btn-primary">

				</div>
			</div>
		</div>

		
	</form>

</div>

</body>
</html>