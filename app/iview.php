<?php
	class iview{
		public $reg;

		function __construct(){
			$this->reg=Registry::getInstance();
			$_SESSION['apli']=$this->reg->apli;
			
			include APP.'views/head.php';
			include APP.'views/ibody.php';
			include APP.'views/foot.php';

		}

	}