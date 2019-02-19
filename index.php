<?php
session_start();
include("../../bigtree-con/dbqueries.php");
include("libs/DB.php");
include("Model/Codes.php");
include("Model/Category.php");
include("Model/User.php");
include("Model/Email.php");
include("Model/Companies.php");
include("Model/Company.php");
include("Model/Testimonials.php");
include("Controller/MainController.php");
include("Controller/PagesController.php");

$routeComponents = isset($_GET['route'])?$_GET['route']:'pages.home';
$route = explode('.', $routeComponents);
$mainAction = strtolower($route[0]);
$action = isset($route[1])?strtolower($route[1]):'';

$oController = new MainController(); // new MainController();
$oController->$mainAction($action);

?>