<?php 

require_once("Libraries/Core/Mysql.php");

trait Sliders{
	private $con;
	private $strCategoria;
	private $intIdcategoria;
	private $intIdProducto;
	private $strProducto;
	private $cant;
	private $option;
	private $strRuta;
	private $strRutaCategoria;

	public function getSliders(){
		$this->con = new Mysql();
		$sql = "SELECT * FROM sliders WHERE status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}
}

?>