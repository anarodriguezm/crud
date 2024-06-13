<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);

	// checking empty fields
	if(empty($name) || empty($age) || empty($surname)) {
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($surname)) {
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
	} else {
		// updating the table
		$stmt = mysqli_prepare($mysqli, "UPDATE users SET name=?,age=?,surname=? WHERE id=?");
		mysqli_stmt_bind_param($stmt, "sisi", $name, $age, $surname, $id);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_free_result($stmt);
		mysqli_stmt_close($stmt);

		// redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
// getting id from url
$id = $_GET['id'];

// selecting data associated with this particular id
$stmt = mysqli_prepare($mysqli, "SELECT name, age, surname FROM users WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $age, $surname);
mysqli_stmt_fetch($stmt);
mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);
mysqli_close($mysqli);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>

<body>
<div class = "container">
	<div class="jumbotron">
		<h1 class="display-4">Panel de control</h1>
		<p class="lead">Demo app</p>
	</div>

	<a href="index.php" class="btn btn-primary">Inicio</a>
	<br/><br/>

	<form name="form1" method="post" action="edit.php">

		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name" value="<?php echo $name;?>">
		</div>

		<div class="form-group">
			<label for="surname">Apellido</label>
			<input type="text" class="form-control" name="surname" value="<?php echo $surname;?>">
		</div>

		<div class="form-group">
			<label for="age">Edad</label>
			<input type="text" class="form-control" name="age" value="<?php echo $age;?>">
		</div>

		<div class="form-group">
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			<input type="submit" name="update" value="Guardar" class="form-control" >
			<input type="button" value="Cancelar" class="form-control" onclick="location.href='index.php'" >
		</div>

	</form>
</div>
</body>
</html>