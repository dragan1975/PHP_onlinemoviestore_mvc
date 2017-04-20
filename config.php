<?php 

function autoLoad1($className){
	if(file_exists("controller/".$className.".php")){
		require_once "controller/".$className.".php";
	}
}
function autoLoad2($className){
	if(file_exists("model/".$className.".php")){
		require_once "model/".$className.".php";
	}
}
spl_autoload_register("autoLoad1");
spl_autoload_register("autoLoad2");