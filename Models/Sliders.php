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
		require("Config/GetDatosQR.php");
		$this->con = new Mysql();
		$sql = "SELECT * FROM sliders WHERE id_restaurant = $id_restaurant AND status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}
}

?>