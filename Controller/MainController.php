<?php

Class MainController
{
	function __construct(){
		//check the user to be able to use the pages;
	}
	public function home()
	{
		/// home page
		$content = $this->loadView("hero-slider");
		$content .= $this->loadView("welcomeText");
		
		$content .= "<h2 class='page-title'>Featured Products</h2>";	
		$arrData['products'] = Products::getProductsInfo('features');
		$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
		$cards = $this->loadView("card",$arrData);
		$content .= $this->loadView("stripslider",$cards);
		
		include("Views/publiclayout-view.php");
	}

	public function products()
	{
		$categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:'';
		$productID = isset($_GET['id'])?$_GET['id']:'';
		
		if(!empty($categoryID)){
			$arrData['products'] = Products::getProductsInfo('category', $categoryID);
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$productContent = $this->loadView("card",$arrData);
			
			
			$content = $this->loadView("products", $productContent);
		}
		else if(!empty($productID)){
			$arrData['sizesCaption'] = Sizes::getAllSizes();
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$arrData['product'] = Product::getProduct($productID);
			$arrData['product']['advantages'] = Product::getAdvantages($productID);
			$variants = $this->loadView("showvariants", $arrData['product']['photos']);
			$arrData['product']['variants'] = $this->loadView("stripslider",$variants);
			$prodDetails = $this->loadView("productDetails",$arrData);
			
			$prodDetails .= "<h2 class='page-title'>Featured Products</h2>";
			$arrData['products'] = Products::getProductsInfo('features');
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$cards = $this->loadView("card",$arrData);
			$prodDetails .= $this->loadView("stripslider",$cards);
			
			$content = $this->loadView("products", $prodDetails);	
		}else{
			$arrData['products'] = Products::getProductsInfo('all');
			$arrData['advantagesCaption'] = Advantages::getAllAdvantages();
			$allProducts = $this->loadView("card",$arrData);
			
			
			$content = $this->loadView("products", $allProducts);	
		}

		$contentMainClass = "productsView";
		include("Views/publiclayout-view.php");
}

	public function about()
	{
		$content = $this->loadView("about");
		include("Views/publiclayout-view.php");
	}
	public function register()
	{
		$content = $this->loadView("register");
		include("Views/publiclayout-view.php");
	}

	public function contact()
	{	
		$content = $this->loadView("contact");
		include("Views/publiclayout-view.php");
	}
	public function payment()
	{	
		$content = $this->loadView("payment");
		include("Views/publiclayout-view.php");
	}
	public function thankyou()
	{	
		$arrData['productsSummary'] = Purchase::getItems()['cartProducts'];
		$summary = $this->loadView("order-summary", $arrData);
		$content = $this->loadView("thankyouPage", $summary);
		include("Views/publiclayout-view.php");
	}
	public function memberDashboard()
	{	
		$content = $this->loadView("memberDashboard");
		include("Views/publiclayout-view.php");
	}
		public function memberLogin()
	{	
		$content = $this->loadView("memberLogin");
		include("Views/publiclayout-view.php");
	}
	public function purchaseHistory()
	{	
		$content = $this->loadView("history");
		include("Views/publiclayout-view.php");
	}
	public function editProfile()
	{	
		$content = $this->loadView("editProfile");
		include("Views/publiclayout-view.php");
	}
	public function cart()
	{
		
		$content = $this->loadView("contact");
		include("Views/publiclayout-view.php");
	}

	public function loadView($viewName ,$arrData="")
	{
		ob_start();
		include("Views/".$viewName."-view.php");
		$viewContent = ob_get_contents();
		ob_clean();

		return $viewContent;
	}
	
	public function test(){
		$content = $this->loadView("userregistration");
		include("Views/publiclayout-view.php");
	}
}

?>