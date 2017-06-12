<?php
		include 'define.inc.php';
		

		Session::init();
		$reg=Registry::getInstance();
		$reg->init();

		$boot=Bootstrap::getInstance();
		$boot->init();
		$boot->route();

