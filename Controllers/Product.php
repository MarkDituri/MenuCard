<?php 
require_once("Models/Categories.php");
class Product extends Controllers{
    use Categories;

	public function __construct()
	{
		parent::__construct();
	}
    
	public function Product()
	{
        require("Config/GetDatosQR.php");
		$data['page_id'] = 1;
		$data['page_tag'] = "Dashboard - Tienda Virtual";
		$data['page_title'] = "Dashboard - Tienda Virtual";
		$data['page_name'] = "product";		
        $data['categories'] = $this->getCategories($id_restaurant);			
		$this->views->getView($this,"product",$data);
	}

    public function getProduct(int $id_restaurant)
    {
        
        $arrData = $this->model->selectProduct($id_restaurant);
        if(empty($arrData))
        {
            $arrResponse = array('status' => false, 'msg' => $arrData);
        }else{
            $arrResponse = array('status' => true, 'data' => $arrData);
        }
        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);            
		
    }

    
}
 ?>