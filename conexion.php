<?php class DataCarlos{
		private static $conexion=null;
		private function __construct(){}
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:host=localhost;dbname=baselogin','root','',$pdo_options);
			return self::$conexion;	}}
?>
