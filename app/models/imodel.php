<?php
	class imodel{

		protected $_db;
        protected $stmt;

		function __construct(){
			 $this->db=DB::singleton();
        	 $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			
		}

        public function query($query){
            $this->stmt = $this->db->prepare($query);
        }

        public function bind($param, $value){

            switch (true) {
                case is_int($value):
                    $type = \PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = \PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = \PDO::PARAM_NULL;
                    break;
                default:
                    $type = \PDO::PARAM_STR;
            }

            $this->stmt->bindValue($param, $value, $type);
        }

        public function execute(){
            $result=$this->stmt->execute();
            return $result;
        }

        public function resultset(){

            return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

    }