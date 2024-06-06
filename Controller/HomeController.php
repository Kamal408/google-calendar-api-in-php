<?php
namespace Controller;

class HomeController extends BaseController {
	
	function __construct()
	{
		if(empty($_SESSION['auth_credentials'])){
			$this->redirect(URL.'login');
		}
	}
	
	public function index(){
		global $google;
		$eventLists = $google->getCalendarList(); 
		include($this->viewFolder."/main.php");
	}

}