<?php 
abstract class Controller {
	public $layout = null;
	public function index(){}
	
	public function loadView($view, $data=array()){
		$this->data = $data;
		$content = "[VIEW]";
		if($this->layout){
			ob_start();
			include "view/".$this->layout.".php";
			$content = ob_get_clean();
		}
		ob_start();
		include "view/".$view.".php";
		$viewContent = ob_get_clean();
		echo str_replace("[VIEW]", $viewContent,$content);
	}
}