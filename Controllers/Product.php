<?php 
class Product extends Controllers{
	public function __construct()
	{
		parent::__construct();
	}
	public function Product()
	{
		$data['page_id'] = 1;
		$data['page_tag'] = "Dashboard - Tienda Virtual";
		$data['page_title'] = "Dashboard - Tienda Virtual";
		$data['page_name'] = "product";
		$data['slider'] = $this->getSliders();
		$data['categories'] = $this->getCategories();
		$data['products'] = $this->getProducts();
		$this->views->getView($this,"product",$data);
	}
    public function getProduct(int $id_category)
    {

        $id_category = intval($id_category);
        $arrData = $this->model->selectProduct($id_category);
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