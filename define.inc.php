<?php
		define('DEF_CONTROLLER','login');
		define('DEF_ACTION','index');
		define('ROOT',realpath(dirname(__FILE__)));
		define('DS',DIRECTORY_SEPARATOR);
		define('APP',ROOT.DS.'app'.DS);
		define('SYS',ROOT.DS.'sys'.DS);
        	define ('APP_W',dirname($_SERVER['SCRIPT_NAME']));
		// array to search classes
		 $classesDir = array (
	    		SYS,
	    		APP,
	    		APP.'controllers/',
	    		APP.'models/',
	    		APP.'views/'
    		);

		function __autoload($class_name) {
    		global $classesDir;
    		foreach ($classesDir as $directory) {
        		if (file_exists($directory . $class_name . '.php')) {
           			 require_once ($directory . $class_name . '.php');
            			return;
        		}
    		}
		}
