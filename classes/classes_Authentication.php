<?php

class TAuthentication {

	function __construct(){
				//constructor

		session_start(); 
		if ($_GET['logout'] == 1){

			$_SESSION['POST'] = 0;
		}

		if ($_SESSION['loggedin'] == 1){

				$this->isAuthorized = 1;
		}else {
			$this->isAuthorized = 0;
		}

	}

	function isAuthorized($username,$password){

			
			return $this->isAuthorized;
	}
	function checkUserPass(){
		if ($_POST['username'] =='djibril' && $_POST['password'] == '123'){

			return 1;

			}else {
				return 0;
			}
		
	}
	function successfulLogin(){

		$_SESSION['loggedin'] =1;

	}
	function failedLogin(){
			

			$_SESSION['loggedin'] =0;
	}
}






?>