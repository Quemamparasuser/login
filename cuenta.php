<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCESO CORRECTO BIENVENIDO</title>
</head>
<body>
	<h1>ACCESO CORRECTO BIENVENIDO</h1>
	<a href="index.php">VOLVER<---</a>
</body>
</html>

