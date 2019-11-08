<?php 
	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('conexion.php');
	session_start();
	$usuario=new Usuario();
	$crud=new CrudUsuario();
	if(isset($_POST['registrarse'])){$i=0;}
	else{$i=1;}
switch($i){
	case 0:
	$usuario->set_Nombre_Usuario($_POST['usuario']);
		$usuario->set_Clave_Usuario($_POST['pas']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario);
			header('Location: index.php');}	break;
	case 1:
		$usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
		if ($usuario->getId()!=NULL) {
		$_SESSION['usuario']=$usuario; 
		header('Location: cuenta.php');
		}else{echo "ERROR USUARIO NO REGISRADO";}break;
	default:
		header('Location: index.php');}
?>



