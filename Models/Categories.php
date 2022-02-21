<?php 

require_once("Libraries/Core/Mysql.php");

trait Categories{
	private $con;
	private $int_id_restaurant;

	public function getCategories($id_restaurant){
		$this->con = new Mysql();
		$sql = "SELECT * FROM categories WHERE id_restaurant = $id_restaurant AND status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}
}

?>