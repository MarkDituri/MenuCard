<?php 

	class Login extends Controllers{
		public function __construct()
		{
			session_start();
			if(isset($_SESSION['Login']))
			{
				header('Location: '.base_url().'/dashboard');
				die();
			}
			parent::__construct();
		}

		public function Login()
		{
			$data['page_tag'] = "LoginQR - Tienda Virtual";
			$data['page_title'] = "Tienda Virtual";
			$data['page_name'] = "LoginQR";
			$data['page_functions_js'] = "functions_Login.js";
			$this->views->getView($this,"loginqr",$data);
		}

		public function loginUser(){
			//dep($_POST);
			if($_POST){
				if(empty($_POST['id_restaurant'])){
					$arrResponse = array('status' => false, 'msg' => 'Error de datos' );
				}else{
					$strIDRest  =  strtolower(strClean($_POST['id_restaurant']));
					$requestUser = $this->model->loginUser($strIDRest);
					if(empty($requestUser)){
						$arrResponse = array('status' => false, 'msg' => 'El usuario o la contraseña es incorrecto.' ); 
					}else{
						$arrData = $requestUser;
						if($arrData['status'] == 'si'){
							$_SESSION['id_rest'] = $arrData['id_restaurant'];
							$_SESSION['login'] = true;

							$arrData = $this->model->sessionLogin($_SESSION['id_rest']);
							sessionUser($_SESSION['id_rest']);							
							$arrResponse = array('status' => true, 'msg' => 'ok');
						}else{
							$arrResponse = array('status' => false, 'msg' => 'Usuario inactivo.');
						}
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function confirmUser(string $params){

			if(empty($params)){
				header('Location: '.base_url());
			}else{
				$arrParams = explode(',',$params);
				$strEmail = strClean($arrParams[0]);
				$strToken = strClean($arrParams[1]);
				$arrResponse = $this->model->getUsuario($strEmail,$strToken);
				if(empty($arrResponse)){
					header("Location: ".base_url());
				}else{
					$data['page_tag'] = "Cambiar contraseña";
					$data['page_name'] = "cambiar_contrasenia";
					$data['page_title'] = "Cambiar Contraseña";
					$data['email'] = $strEmail;
					$data['token'] = $strToken;
					$data['idpersona'] = $arrResponse['idpersona'];
					$data['page_functions_js'] = "functions_LoginQR.js";
					$this->views->getView($this,"cambiar_password",$data);
				}
			}
			die();
		}

	}
 ?>