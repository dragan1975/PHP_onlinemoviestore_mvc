<?php 
require "config.php";
//create variables to GET values for controller and method
$cont = isset($_GET['mvccontroller'])?$_GET['mvccontroller']:"Base";
$method = isset($_GET['mvcmethod'])?$_GET['mvcmethod']:"index";

$cont = $cont."Controller";
$c = new $cont;//an instance of controller
$c->$method();//calling a method 
