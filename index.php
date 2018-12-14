<?php
include("../../bigtree-con/dbqueries.php");
include("libs/DB.php");
include("Model/User.php");
include("Controller/MainController.php");
include("Controller/PagesController.php");
include("Controller/FormsController.php");

session_start();

$route = explode('.', $_GET['route']);
$mainAction = $route[0];
$action = $route[1];

$oController = new MainController(); // new MainController();
$oController->$mainAction($action);

?>