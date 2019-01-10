<?php
	class PagesController{	
		//Get the content inside views apllying the data for that
		public function loadView($viewName ,$arrData= "")
		{
			ob_start();
			echo "<!-- OB from Views/$viewName-view.php --> \n";
			include("Views/".$viewName."-view.php");
			$viewContent = ob_get_contents();
			ob_clean();

			return $viewContent;
		}

		public function home()
		{
			// home page
			$content = $this->loadView("hero");
			$content .= '<h1> Home Page </h1>';
			$content .= $this->loadView("contact");
			include("Views/publiclayout-view.php");
		}

		public function about()
		{
			$content = $this->loadView("about");
			include("Views/publiclayout-view.php");
		}

		public function services()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
			$content = '<h1> Services Page  </h1>';
			include("Views/publiclayout-view.php");
		}

		public function testimonials()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
			$content = '<h1> Companies Page  </h1>';
			include("Views/publiclayout-view.php");
		}

		public function contact()
		{	
			$content = $this->loadView("contact");
			include("Views/publiclayout-view.php");
		}

		public function register()
		{
			$content = $this->loadView("userregistration");
			include("Views/publiclayout-view.php");
		}

		public function memberdashboard()
		{	
			$content = $this->loadView("memberDashboard");
			include("Views/publiclayout-view.php");
		}

		public function login()
		{	
			$content = $this->loadView("loginregister");
			include("Views/publiclayout-view.php");
		}
		
		public function registerservice(){
			$arrServices = Category::getAllCategories();
			$content = $this->loadView("registerservice", $arrServices);
			include("Views/publiclayout-view.php");
		}

		public function editprofile()
		{	
			$content = $this->loadView("editProfile");
			include("Views/publiclayout-view.php");
		}

	}
?>