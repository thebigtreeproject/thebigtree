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
			$content .= $this->loadView("homecontent");
			$content .= $this->loadView('testimonial');
			$content .= $this->loadView('border');
			$content .= $this->loadView('contact');

			include("Views/publiclayout-view.php");

		}

		public function about()
		{
			
			$content = $this->loadView("hero");		
			$content .= $this->loadView("about");
			$content .= $this->loadView('border');
			$content .= $this->loadView('contact');

			include("Views/publiclayout-view.php");
			
		}

		public function services()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
			$content = $this->loadView("service");
			$arrData['categories'] = Category::getAllCategories();
			$arrData['services'] = Companies::getAll();
			$content = $this->loadView("services", $arrData);
			include("Views/publiclayout-view.php");
		}
		
		public function category()
		{
			//services page
			$nCatID = isset($_GET['catid'])?$_GET['catid']:'';
			$arrData['service'] = Category::getOne($nCatID);
			$content = $this->loadView("category", $arrData);
			include("Views/publiclayout-view.php");
		}
		
		public function service()
		{
			//services page
			$nCompanyID = isset($_GET['serviceID'])?$_GET['serviceID']:'';
			$arrData['service'] = Company::getOne($nCompanyID);
			$arrData['modalcontent'] = $this->loadView("servicedetails", $arrData['service']);
			$content = $this->loadView("modalholder", $arrData['modalcontent']);
			include("Views/publiclayout-view.php");
		}

		public function testimonials()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
			$content = '<h1> Companies Page  </h1>';
			$content .= $this->loadView('testimonial');
			include("Views/publiclayout-view.php");
		}

		public function contact()
		{	
			$content = $this->loadView("contact");
			include("Views/publiclayout-view.php");
		}

		public function register()
		{
			$content = $this->loadView("registeruser");
			include("Views/publiclayout-view.php");
		}

		public function memberdashboard()
		{	
			$content = $this->loadView("memberDashboard");
			include("Views/publiclayout-view.php");
		}

		public function login()
		{	
			$content = $this->loadView("login");
			include("Views/publiclayout-view.php");
		}
		
		public function registerservice(){
			$arrCategories = Category::getAllCategories();
			$content = $this->loadView("registerservice", $arrCategories);
			include("Views/publiclayout-view.php");
		}

		public function editprofile()
		{	
			$content = $this->loadView("editProfile");
			include("Views/publiclayout-view.php");
		}

	}
?>