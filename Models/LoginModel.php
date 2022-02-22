<?php 

	class LoginModel extends Mysql
	{
		private $intIdUsuario;
		private $strUsuario;
		private $strPassword;
		private $strToken;

		public function __construct()
		{
			parent::__construct();
		}	

		public function loginUser(string $id_rest)
		{
			$this->intId_Rest = $id_rest;
			$sql = "SELECT id_restaurant, nombre, status 
				FROM restaurants
				WHERE id_restaurant = $this->intId_Rest";
			$request = $this->select($sql);
			return $request;
		}

		public function sessionLogin(int $id_rest){
			$this->intId_Rest = $id_rest;
			//BUSCAR ROLE 
			$sql = "SELECT id_restaurant, nombre, status 
				FROM restaurants
				WHERE id_restaurant = $this->intId_Rest";
			$request = $this->select($sql);
			$_SESSION['userData'] = $request;
			return $request;
		}


		public function getUsuario(string $email, string $token){
			$this->strUsuario = $email;
			$this->strToken = $token;
			$sql = "SELECT idpersona FROM persona WHERE 
					email_user = '$this->strUsuario' and 
					token = '$this->strToken' and 					
					status = 1 ";
			$request = $this->select($sql);
			return $request;
		}


	}
 ?>