<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Panel de control</title>
</head>
<body>
<div>
	<header>
		<h1>Panel de Control</h1>
	</header>

	<main>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="add.html">Alta</a></li>
	</ul>
	<h2>Listado de trabajador@s</h2>
	<table border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbdody>
<tr>
<td>Pedro</td>
<td>Zapata</td>
<td>23</td>
<td><a href="edit.php?id=7">Editar</a>
<a href="delete.php?id=7" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Juan</td>
<td>Perez</td>
<td>21</td>
<td><a href="edit.php?id=6">Editar</a>
<a href="delete.php?id=6" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Marcos</td>
<td>Corrales</td>
<td>26</td>
<td><a href="edit.php?id=5">Editar</a>
<a href="delete.php?id=5" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Maria</td>
<td>Dimas</td>
<td>19</td>
<td><a href="edit.php?id=4">Editar</a>
<a href="delete.php?id=4" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Pablo</td>
<td>Valencia</td>
<td>29</td>
<td><a href="edit.php?id=3">Editar</a>
<a href="delete.php?id=3" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Carlos</td>
<td>Oro</td>
<td>32</td>
<td><a href="edit.php?id=2">Editar</a>
<a href="delete.php?id=2" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
<tr>
<td>Julian</td>
<td>Casas</td>
<td>27</td>
<td><a href="edit.php?id=1">Editar</a>
<a href="delete.php?id=1" onClick="return confirm('¿Está segur@ que desea eliminar el registro?')" >Eliminar</a></td>
</td></tr>
	</tbdody>
	</table>
	</main>
	<footer>
    Created by the IES Miguel Herrero team &copy; 2024
  	</footer>
</div>
</body>
</html>