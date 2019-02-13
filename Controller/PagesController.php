<?php
	class PagesController extends MainController{	
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
			$arrData['categories'] = Category::getAllCategories();
			$content .= $this->loadView("service", $arrData);
			$arrData['testimonials'] = Testimonials::getTestimonials(5);
			$content .= $this->loadView('testimonialslider', $arrData['testimonials']);
			$content .= $this->loadView('contact');

			include("Views/publiclayout-view.php");
		}

		public function about()
		{
			$arrData['heroImage'] = 'assets/happy.jpg';
			$content = $this->loadView("hero", $arrData);	
			$content .= $this->loadView("about");
			$content .= $this->loadView('border');

			include("Views/publiclayout-view.php");			
		}

		public function services()
		{
			//services page
			$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';

			$arrData['categories'] = Category::getAllCategories();
            $content = $this->loadView("serviceinfo");
			$content .= $this->loadView("service", $arrData);
			include("Views/publiclayout-view.php");
		}
		
		public function category()
		{
			//services page
			$nCatID = isset($_GET['catid'])?$_GET['catid']:'';
			$arrData = Category::getOneForPager($nCatID);
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

		public function dashboard()
		{	
			if($this->userLoged === true){
				$content = $this->loadView("dashboard");
				include("Views/publiclayout-view.php");
			}
			else{
				header('location: ./?route=pages.login');
			}
		}

		public function login()
		{	
			$strEmail = (!empty($_SESSION['loginEntries']))?$_SESSION['loginEntries']['strEmail']:'';
			$error = !empty($_GET['loginErr'])?'loginError':'';
			$message = !empty($_GET['loginErr'])?'Wrong wmail or password':'Login to your account';

			$arrData['loginEntries'] = array ('strEmail'=> $strEmail);
			$arrData['errorMessage'] = array ( 'error' => $error, 'message' => $message);
			$content = $this->loadView("login", $arrData);
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

		public function test(){//services page
			$nCompanyID = isset($_GET['serviceID'])?$_GET['serviceID']:'';
			$arrData['service'] = Company::getOne($nCompanyID);
			$arrData['modalcontent'] = $this->loadView("servicedetails", $arrData['service']);
			
			$content = $this->loadView("modalholder", $arrData['modalcontent']);
			include("Views/publiclayout-view.php");
		}

	}
?>