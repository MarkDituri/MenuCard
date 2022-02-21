<?php 

require_once("Libraries/Core/Mysql.php");

trait DatosQR{
	private $con;
	private $id_restaurant;
	private $id_mesa;

	public function getDatosRest(int $id_restaurant){
		$this->con = new Mysql();
		$sql = "SELECT * FROM restaurants WHERE id_restaurant = $id_restaurant AND status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}

	public function getDatosMesa(int $id_restaurant){
		$this->con = new Mysql();
		$sql = "SELECT * FROM mesas WHERE id_restaurant = $id_restaurant AND id_mesa = 1";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}
}

?>