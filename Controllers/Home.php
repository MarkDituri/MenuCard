<?php 
require_once("Models/DatosQR.php");
require_once("Models/Sliders.php");
require_once("Models/Categories.php");
require_once("Models/Product.php");
class Home extends Controllers{
	use DatosQR;
	use Sliders;
	use Categories;
	use Product;

	public function __construct()
	{
		parent::__construct();
	}

	public function Home()
	{
		require("Config/GetDatosQR.php");
		$data['page_id'] = 1;
		$data['page_tag'] = "Dashboard - Tienda Virtual";
		$data['page_title'] = "Dashboard - Tienda Virtual";
		$data['page_name'] = "home";
		$data['datosRest'] = $this->getDatosRest($id_restaurant);
		$data['datosMesa'] = $this->getDatosMesa($id_restaurant);
		$data['slider'] = $this->getSliders();
		$data['categories'] = $this->getCategories($id_restaurant);
		$data['products'] = $this->getProducts();
		$this->views->getView($this,"home",$data);
	}

	
}
 ?>