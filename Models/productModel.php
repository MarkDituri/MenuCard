<?php 

class ProductModel extends Mysql
{
    public $id_restaurant;
    public $id_category;
    public $id_product;

    public function __construct()
    {
        parent::__construct();
    }

    public function selectProducts()
    {

        $sql = "SELECT * FROM products WHERE id_restaurant = $id_restaurant status 'si';";
        $request = $this->select_all($sql);
        return $request;
    }	
    
    public function selectProduct(int $id_category)
    {
        
        $sql = "SELECT id_product,status,name,description,precio,url_img
        FROM products WHERE id_restaurant = 1 AND id_category = $id_category AND status = 'si'";
		$request = $this->select_all($sql);
		return $request;
    }

}
 ?>