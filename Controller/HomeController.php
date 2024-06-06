<?php
namespace Controller;

class HomeController extends BaseController {
	
	function __construct()
	{
		if(empty($_SESSION['access_token'])){
			$this->redirect(URL.'login');
		}
	}
	
	public function index(){
		include($this->viewFolder."/main.php");
	}

}