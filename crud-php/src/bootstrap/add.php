<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Add Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>

<body>
<div class = "container">
	<div class="jumbotron">
		<h1 class="display-4">Simple LAMP web app</h1>
		<p class="lead">Demo app</p>
	</div>


<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	

	// checking empty fields
	if(empty($name) || empty($age) || empty($surname)) {
		if(empty($name)) {
			echo "<div class='alert alert-danger' role='alert'>Name field is empty</div>";
		}

		if(empty($age)) {
			echo "<div class='alert alert-danger' role='alert'>Age field is empty</div>";
		}

		if(empty($surname)) {
			echo "<div class='alert alert-danger' role='alert'>Surname field is empty</div>";
		}

		// link to the previous page
		echo "<a href='javascript:self.history.back();' class='btn btn-primary'>Go Back</a>";
	} else {
		// if all the fields are filled (not empty)

		// insert data to database
		$stmt = mysqli_prepare($mysqli, "INSERT INTO users(name,age,surname) VALUES(?,?,?)");
		mysqli_stmt_bind_param($stmt, "sis", $name, $age, $surname);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// display success message
		echo "<div class='alert alert-success' role='alert'>Datos añadidos correctamente</div>";
		echo "<a href='index.php' class='btn btn-primary'>Ver resultado</a>";
	}
}

mysqli_close($mysqli);

?>
</div>
</body>
</html>
