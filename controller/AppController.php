<?php 

class AppController extends Controller{
	public $layout = "layout";
	public function index(){
		$this->loadview("index");
	} 
	public function movies(){
		$movies = Movie::getAll();
		$this->loadview("movies", $movies);
	}
	public function help(){
		$this->loadview("help");
	}
	public function aboutStore(){
		$this->loadview("about");
	}
}