<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	class CrudUsuario{
		public function __construct(){}
		public function insertar($usuario){
			$db=DataCarlos::conectar();
			$insert=$db->prepare('INSERT INTO USUARIOS VALUES(NULL,:nombre, :clave)');
			$insert->bindValue('nombre',$usuario->get_Nombre_Usuario());
			$pass=$usuario->get_Clave_Usuario();
			$insert->bindValue('clave',$pass);
			$insert->execute();	}
		public function obtenerUsuario($nombre){
			$db=DataCarlos::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE nombre=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
				$usuario->set_Id_Usuario($registro['Id']);
				$usuario->set_Nombre_Usuario($registro['nombre']);
				$usuario->set_Clave_Usuario($registro['clave']);	
			return $usuario;}
			
		public function buscarUsuario($nombre){
			$db=DataCarlos::conectar();
			$usado=True;
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE nombre=:nombre');
			$select->bindValue('nombre',$nombre);
			$select->execute();
			$registro=$select->fetch();
			if($registro['Id']!=NULL){
				$usado=False;}
		return $usado;}}?>
