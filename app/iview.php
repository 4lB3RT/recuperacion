<?php
	class iview{
		public $reg;

		function __construct($view){
			$this->reg=Registry::getInstance();
			$_SESSION['apli']=$this->reg->apli;
			
			include APP.'views/head.php';
			include APP.'views/'.$view.'.php';
			include APP.'views/foot.php';

		}

	}