<?php 
	class Usuario{
		private $id;
		private $nombre;
		private $clave;
		public function get_Id_Usuario(){
		return $this->id;
		}
		public function set_Id_Usuario($id){
		$this->id = $id;}
		public function get_Nombre_Usuario(){
		return $this->nombre;}
		public function set_Nombre_Usuario($nombre){
		$this->nombre = $nombre;}
		public function get_Clave_Usuario(){
		return $this->clave;}
		public function set_Clave_Usuario($clave){
			$this->clave = $clave;}}
//creacion de geters and seters 
?>
