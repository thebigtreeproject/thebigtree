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
			
			// to add a hero image in a page just copy the two lines below and change the path for the image
			$arrData['heroImage'] = 'assets/happy.jpg'; // notice that you need to provide the folder and the name of the image (i.e. ASSETS / IMAGE.JPG)
			$content = $this->loadView("hero", $arrData);
			
			$content .= $this->loadView("homecontent");
			$content .= $this->loadView("service");
			$content .= $this->loadView('testimonial');
			$content .= $this->loadView('border');
			$content .= $this->loadView('contact');

			include("Views/publiclayout-view.php");

		}

		public function about()
		{
			$arrData['heroImage'] = 'assets/happy.jpg';
			$content = $this->loadView("hero", $arrData);	
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
			

			// $content = $this->loadView("services", $arrData);
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
		
		public function modalservice()
		{
			//services page
			$nCompanyID = isset($_GET['serviceID'])?$_GET['serviceID']:'';
			$arrData['service'] = Company::getOne($nCompanyID);
			$arrData['modalcontent'] = $this->loadView("servicedetails", $arrData['service']);
			
			echo $this->loadView("modalholder", $arrData['modalcontent']);
		}

		public function testimonials()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
			$arrData['testimonials'] = Testimonials::getTestimonials(5);
			$content = $this->loadView('testimonial', $arrData['testimonials']);
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