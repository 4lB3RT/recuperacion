<?php
	class Bootstrap {
		static $_instance;
		protected $_controller;
		protected $_action;

		static function getInstance(){
			if(!(self::$_instance instanceof self)){
				self::$_instance= new self();
			}
			return self::$_instance;
		}

		function init(){
			$request=$_SERVER['REQUEST_URI'];
			$path=explode('/',trim($request,'/'));
			
			array_shift($path);
			
			$this->_controller=!empty($path[0])? $path[0]:DEF_CONTROLLER;
			$this->_action=!empty($path[1])? $path[1]: DEF_ACTION;
			

		}
		function route(){
			$cont=$this->_controller;
			$control=APP.DS.'controllers/'.strtolower($this->_controller.'.php');
			

			if (is_readable($control)){
			
			
				$c=new $cont();
				if (method_exists($cont,$this->_action)){
					call_user_func(array($c,$this->_action));
				}
			}else{
			echo 'no Controller';
			print_r($control);
			}
		}

	}