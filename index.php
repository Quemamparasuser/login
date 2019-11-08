<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="controller_login.php" method="post">
	NOMBRE:<input type="text" name="usuario"><br/>
	PASSWORD:<input type="password" name="pas"><br/>
	<input type="submit" name="entrar" value="entrar">
	</form>
<a href="registrarse.php">Registrarse</a>
</body>
</html>