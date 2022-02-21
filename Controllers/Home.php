<?php 
require_once("Models/Sliders.php");
require_once("Models/Categories.php");
require_once("Models/Product.php");
class Home extends Controllers{
	use Sliders;
	use Categories;
	use Product;

	public function __construct()
	{
		parent::__construct();
	}

	public function Home()
	{
		$data['page_id'] = 1;
		$data['page_tag'] = "Dashboard - Tienda Virtual";
		$data['page_title'] = "Dashboard - Tienda Virtual";
		$data['page_name'] = "home";
		$data['slider'] = $this->getSliders();
		$data['categories'] = $this->getCategories();
		$data['products'] = $this->getProducts();
		$this->views->getView($this,"home",$data);
	}

	
}
 ?>