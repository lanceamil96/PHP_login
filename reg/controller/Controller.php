<?php
include_once('model/Model.php');


class Controller {
	public $model;


	public function __construct(){
	        $this->model = new Model();
	    }
	public function invoke(){
			$res = $this->model->getlogin(); 
			if($res == 'login'){
				include 'view/Afterlogin.php';
			}
			else{
				include 'view/login.php';
			}
	}
}
?>