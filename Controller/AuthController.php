<?php
namespace Controller;

class AuthController extends BaseController {

	function __construct()
	{
		if(!empty($_SESSION['access_token'])){
			$this->redirect(URL);
		}
	}
	
	public function login(){
		global $google;

		if (!empty($_GET['code'])) {

			echo "<pre>";
			print_r($google->client->fetchAccessTokenWithAuthCode($_GET['code']));
			echo "</pre>";
		}

		$auth_url = $google->client->createAuthUrl();
		include($this->viewFolder."/login.php");
	}

}