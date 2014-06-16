<?php
	class imodel{

		protected $_db;

		function __construct(){
			 $this->db=DB::singleton();
        	 $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			
		}
	}