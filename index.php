<?php
include("../../bigtree-con/dbqueries.php");
include("libs/DB.php");
include("Model/Codes.php");
include("Model/User.php");
include("Model/Email.php");
include("Controller/MainController.php");
include("Controller/PagesController.php");
include("Controller/FormsController.php");

session_start();

$route = explode('.', isset($_GET['route'])?$_GET['route']:'pages.home');
$mainAction = strtolower($route[0]);
$action = isset($route[1])?strtolower($route[1]):'';

$oController = new MainController(); // new MainController();
$oController->$mainAction($action);

?>