<?php 

require_once("Libraries/Core/Mysql.php");

trait Categories{
	private $con;
	private $strCategoria;
	private $intIdcategoria;
	private $intIdProducto;
	private $strProducto;
	private $cant;
	private $option;
	private $strRuta;
	private $strRutaCategoria;

	public function getCategories(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM categories WHERE status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}
}

?>