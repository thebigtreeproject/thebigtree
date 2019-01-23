<?php

	class MainController
	{
		var $userLoged = '';
		function __construct()
		{
			//check the user to be able to use the pages;
			$this->userLoged = true;
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
				case 'activate':
					User::confirm();
					break;
				case 'login':
					User::login();
					break;
				default:
					break;
			}
			
		}
		public function company($action)
		{
			switch ($action){
				case 'save':
					Company::save();
					break;
				case 'activate':
					Company::confirm();
					break;
				default:
					break;
			}
			
		}
		public function testimonial($action)
		{
			switch ($action){
				case 'save':
					Testimonials::submit();
					header('location: ./?route=pages.testimonials');
					break;
				default:
					break;
			}
			
		}
	}

?>