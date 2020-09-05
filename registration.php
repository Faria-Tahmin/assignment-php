<?php 
require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Information Collection Task</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style>
		.container{
			background-image:linear-gradient(40deg , pink ,darkorchid);
			margin: 40px 100px;
			padding: 60px 140px;
		}

		.button{
			text-decoration: none;
			background-image: linear-gradient(30deg , purple , darkorchid);
			padding: 10px 20px;
			border-radius: 8px;
			color: whitesmoke;
			font-weight: bolder;
		}

	</style>
</head>
<body>

	<div>
		<?php
		if(isset($_POST['create'])){

			$name = $_POST['name'];
			$id = $_POST['id'];
			$department = $_POST['department'];
			$institution = $_POST['institution'];
			$email = $_POST['email'];
			$contact= $_POST['contact'];
			$password = $_POST['password'];

			$sql="INSERT INTO users(name,id, department,institution,email,contact,password) VALUES(?,?,?,?,?,?,?)";
			$stmtinsert = $db->prepare($sql);
			$result= $stmtinsert->execute([$name,$id,$department,$institution,$email,$contact,$password]);
			
		}
		?>
	</div>

	<div>
		<form action="registration.php" method="post">

			<div class="container">
				<h1> Sign in Informations</h1>
				<p> Fill up the form with original informations</p>
				<hr class="mb-3">
				<div class="row">

					<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">

						
						<label for="name"><b>Name:</b></label>
						<input class="form-control" type="text" name="name" required>

						<label for="id"><b>ID:</b></label>
						<input class="form-control"  type="text" name="id" required>

						<label for="department"><b>Department:</b></label>
						<input class="form-control"  type="text" name="department" required>

						<label for="institution"><b>Institution Name:</b></label>
						<input class="form-control"  type="text" name="institution" required>

						<label for="email"><b>Email:</b></label>
						<input class="form-control"  type="email" name="email" required>

						<label for="contact"><b>Contact:</b></label>
						<input  class="form-control" type="text" name="contact" required>

						<label for="password"><b>Password:</b></label>
						<input  class="form-control" type="password" name="password" required>

						<hr class="mb-3">
						<input class="button" type="submit" name="create" value="Submit">
					</div>
				</div>
			</div>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>


</html>