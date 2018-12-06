<?php
include("../../bigtree-con/dbqueries.php");
include("libs/DB.php");
include("Model/User.php");
include("Controller/MainController.php");
include("Controller/PagesController.php");
include("Controller/FormsController.php");
session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"main";
$action = (isset($_GET["action"]))	?$_GET["action"]:"test";

$controllerName = ucfirst($controller)."Controller"; // creates MainController
$oController = new $controllerName(); // new MainController();

$oController->$action();

?>