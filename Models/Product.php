<?php 

require_once("Libraries/Core/Mysql.php");

trait Product{
	private $con;
	private $strCategoria;
	private $intIdcategoria;
	private $intIdProducto;
	private $strProducto;
	private $cant;
	private $option;
	private $strRuta;
	private $strRutaCategoria;

	public function getProducts($id_restaurant){
		$this->con = new Mysql();
		$sql = "SELECT * FROM products WHERE id_restaurant = $id_restaurant AND status = 'si';";			
		$request = $this->con->select_all($sql);		
		return $request;	
	}

	public function getProduct(int $id_category)
    {
		//Verifico QR
		if(isset($_GET['id_rest'])) {
			$id_restaurant = $_GET['id_rest'];
		}
        $sql = "SELECT id_product,status,name,description,precio,url_img
        FROM products WHERE id_category = $id_category AND status = 'si'";
		$request = $this->selectProduct($sql);
		return $request;
    }


}

?>