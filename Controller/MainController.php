<?php

	class MainController
	{
		var $userLoged = false;
		function __construct()
		{
			//check the user to be able to use the pages;
			if(!empty($_SESSION['user'])){
				$this->userLoged = true;
			}
		}
		public function pages($action)
		{
			$oPage = new PagesController;
			$oPage->$action();
		}
		public function user($action)
		{
			switch ($action){
				case 'save':
					User::save();
					break;
				case 'update':
					User::update();
					break;
				case 'activate':
					User::confirm();
					break;
				case 'login':
					User::login();
					break;
				case 'logout':
					User::logout();
					break;
				default:
					break;
			}
			
		}
		public function company($action)
		{
			if($this->userLoged === true){
				switch ($action){
					case 'save':
						//save new company
						Company::save();
						break;
					case 'delete':
						//save new company
						Company::delete();
						break;
					case 'update':
						//run update function
						Company::update();
						break;
					case 'activate':
						Company::confirm();
						break;
					case 'editcompany':
						//get company informations to place in the form
						Company::getForForm();
						break;
					default:
						break;
				}
			}
			else{
				header('location: ./?route=pages.login');
			}			
		}
		public function testimonial($action)
		{
			if($this->userLoged === true){
				switch ($action){
					case 'save':
						Testimonials::submit();
						header('location: ./?route=pages.testimonials');
						break;
					default:
						break;
				}
			}
			else{
				header('location: ./?route=pages.login');
			}
		}
	}

?>