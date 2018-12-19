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
				default:
					break;
			}
			
		}

		public function test()
		{
			echo $this->userLoged;
//			$content = $this->loadView('userregistration');
//			include("Views/publiclayout-view.php");
		}
	}

?>